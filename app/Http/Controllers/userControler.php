<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userControler extends Controller
{
    function userForm(Request $req){
       $req->validate([
        'username'=>'required',
        'email'=>'required',
        'city'=>'required',
        'skill'=>'required',
        'gender'=>'required',
        
       ]);
      
        return $req;

    }
}
