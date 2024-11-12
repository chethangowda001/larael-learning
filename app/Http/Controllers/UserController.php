<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getusers(){
        // return "chethan" ;
        return view("lara");
    }

    function seeUsers(){
        return "hello this is chethan";
    }

    function dynaUsers($name){
        echo "the name is php develeoper $name";
        return view("userName", ["name"=> "$name"]);
    }

    function adminPage(){
        return view("admin.adminPage");
    }
}
