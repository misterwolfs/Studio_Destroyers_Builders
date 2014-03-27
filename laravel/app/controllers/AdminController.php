<?php

class AdminController extends BaseController {

    protected $layout = 'layouts.admin';


    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function login()
    {

        if(Auth::check())
        {
            return Redirect::to('admin');
        }
        else
        {
            // Set page title
            $this->layout->title = 'Login Page';

            // Set page content
            $this->layout->content = View::make('pages.admin.login');
        }
    }

    public function loginCheck()
    {
        // Get all form input
        $input = Input::all();

        // Set page title
        $this->layout->title = 'Login Check';

        // Login user
        if (Auth::attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            return Redirect::intended('admin');
        }
    }

    public function logout()
    {
        if(Auth::check())
        {
            Auth::logout();

        }

        return Redirect::to('admin/login');
    }

    public function showOverview() {
        // Set page title
        $this->layout->title = 'Admin Overview Page';

        // Set page content
        $this->layout->content = View::make('pages.admin.overview');
    }
}