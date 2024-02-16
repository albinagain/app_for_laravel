<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }

    // public function goto(){
    //     return view('Users');
    // }

    public function show($id){
        $data = array(
            "id"=>$id,
            "name"=>"Albin",
            "age"=>22,
            "email"=>"ajmmosawan@gmail.com"
        );
        return Controllers('UserController', ['data' => $data]);   
    }
}