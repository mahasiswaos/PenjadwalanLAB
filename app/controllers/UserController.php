<?php
namespace App\Controllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use App\Controllers\BaseController;
use View;

class UserController extends BaseController{
    
    
    /**
     * Display the specified resource
     * 
     * @param int $id Description
     * @return response Description
     */
    public function show_data(){
        $data['data_user'] = User::find($id);
        return View::make('user/detail');
    }
}

