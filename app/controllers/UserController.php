<?php

class UserController extends Controller {

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

	public function getIndex()
    {
        $environment = App::environment();

        return View::make('public.login');
    }


    public function postLogin()
    {

      
        $credentials = array(
            'email' => Input::get('email'),
            'password' =>Input::get('password'),
            
        );
        
        if (Auth::attempt($credentials)){
            return Redirect::intended('home');
            
        } else {
            
            echo "No way!";
        }  	

    }


    

    public function getLogout()
    {

    	Auth::logout();

    	return Redirect::to('home');

    }


    // public function getAdd(){

    //     $user = new User();
    //     $user->username  = 'mirjana';
    //     $user->email     = 'mirjana@sommite.nl';
    //     $user->password  = Hash::make('admin12345');
        
    //    // $user = new User();
 
    //     $user->save();
            
    //    var_dump($user); die();
    // }

}
