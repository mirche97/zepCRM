<?php
/**
 * The Elegant class extends the Eloquent ORM class
 * providing validation on model level.
 *
 */
class Sommmiquent extends Eloquent {


    protected $rules, $errors, $messages;

    protected $masterId;

    public static $metaFields = array();

    public static $managed = false;
    public static $templatable = false;

    public function meta_tags(){

         return $this->has_many('Meta', 'entity_right')->where_tbl_left(TBL_TAGS)->where_tbl_right(Model::getMasterId(get_class($this)));
    }

    public function tableId(){
        return Model::getMasterId(get_class($this));
    }


    public function many_to_many($model, $foreign = null, $other = null, $metaFields=array())
	{
		return new Metarelationship($this, $model, $foreign, $other, $metaFields);
	}


    public function softDelete(){
        $this->_deleted = 1;
        $this->save();
    }

    public function tags(){

         return $this->meta_relation('Tagtree', 'right');
    }
    /**
     * defines many-to-many relation with _metadon pivot table
     *
     * @param type $model related model name
     * @param type $side 'side'in _metadon table
     */
    public function meta_relation($model, $side='left'){

        $other = $side=='left'?'right':'left';
        self::$metaFields[$model] = array(
            'tbl_'.$side => $this->tableId(),
            'tbl_'.$other => Model::getMasterId($model));


        return $this->many_to_many($model, 'entity_'.$side, 'entity_'.$other, self::$metaFields[$model])
                ->where('tbl_'.$side, '=', $this->tableId())
                ->where('tbl_'.$other, '=',Model::getMasterId($model));
    }


    /**
     * finds instances of a model based on its relation in _metadon
     *
     * @param type $model
     * @param type $ids
     * @param type $side
     * @param type $orderCol
     * @param type $orderDirection
     *
     * @return Query
     */
    public static function find_by_meta($model, $ids, $side='left', $orderCol = "id", $orderDirection="asc"){
        $other = $side=='left'?'right':'left';

        $myModel = get_called_class();
        if ($orderCol=="id"){
            $orderCol = $myModel::$table.'.id';
        }

        $result = self::select($myModel::$table.'.*')
                ->join('_metadon', 'entity_'.$side, '=', $myModel::$table.'.id')
                ->where('tbl_'.$side, '=', Model::getMasterId($myModel))
                ->where('tbl_'.$other, '=', Model::getMasterId($model))
                ->where_in('entity_'.$other, (array)$ids)
                ->order_by($orderCol, $orderDirection)
                ->distinct();
               // ->get($myModel::$table.'.*');

        return $result;
    }


    /**
     * finds object by multiply _metadon connections
     * for example, tagtrees my model by entity
     *
     * @param array $properties array of arrays with keys 'model', 'ids' and 'side'
     * @param type $orderCol
     * @param type $orderDirection
     *
     * @return Query
     */
    public static function find_by_multimeta($properties, $orderCol = "id", $orderDirection="asc"){

        $myModel = get_called_class();

        $query = self::select($myModel::$table.'.*');

        foreach ($properties as $key=>$input){
            $side = isset($input['side'])?$input['side']:'left';

            $other = $side=='left'?'right':'left';
            $model = $input['model'];
            $ids = $input['ids'];

            $query->join('_metadon as mt_'.$key, 'mt_'.$key.'.entity_'.$side, '=', $myModel::$table.'.id')
                ->where('mt_'.$key.'.tbl_'.$side, '=', Model::getMasterId($myModel))
                ->where('mt_'.$key.'.tbl_'.$other, '=', Model::getMasterId($model))
                ->where_in('mt_'.$key.'.entity_'.$other, (array)$ids);

        }

        $query->order_by($orderCol, $orderDirection)
                ->distinct();

        return $query;
    }


    /**
     * Validate the input based on the rules
     * On error set the error member
     * @param array $data
     * @return boolean
     */
    public function validate($data) {

		$v = (empty($this->messages)
        ? Validator::make($data, $this->rules)
        : Validator::make($data, $this->rules, $this->messages));

        if ($v->fails()) {
            $this->errors = $v->errors;
            return false;
        }
        return true;
    }

    /**
     * If the validator fails assign the errors to
     * the error object.
     * @return object
     */
    public function errors() {
        return $this->errors;
    }

    /**
     * The rules
     */
    public function rules($rules) {
        $this->rules = $rules;
    }

    /**
     * Messages
     */
    public function messages($messages) {
        $this->messages = $messages;
    }

}



