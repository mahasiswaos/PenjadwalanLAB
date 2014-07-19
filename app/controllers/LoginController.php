<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use View;
use Validator;
use Redirect;
use Auth;
use Session;

class LoginController extends BaseController {

    public function index() {
        return View::make('login.index');
    }

    public function ProsesLogin() {
        $inp = Input::all();
        $rules = [

            'email' => 'required|email',
            'password' => 'required'
        ];
        $valid = Validator::make($rules, $inp);
        if ($valid->fails()) {
            return Redirect::to('/Login')->withErros($valid);
        } else {
            $pass = $inp ['password'];
            $email = $inp ['email'];
            $data = [
                'email' => $email,
                'password' => $pass,
            ];
            if (Auth::attempt($data)) {
                Session::flash('message', 'Successfully Login!');
                return Redirect::intended('\users'); 
                } else {
                    Session::flash('message', 'Wrong Username and or Password!!!');
                    return Redirect::to('/login');
                }
            }
        }
        
        public function dologout() {
            Auth::Logout();
            return Redirect::to('login');
            
        }
    }


