<?php

class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        return View::make('hello');
    }


    public function getIndex()
    {


        //var_dump(Session::all());die();
        $user = Session::get('user');

        return View::make('home.index')->with('user',$user);
    }


    public function getTest(){

        $article = new Article();
        
        var_dump($article);
    }

    public function getAaaa(){

        //var_dump(Auth::user());
        echo "aaaaaaaaaaa";
    }
}
