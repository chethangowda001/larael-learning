<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    function  show(){
        return "this is show controllers function";
    }

    function  add(){
        return "this is add controllers function";
    }

    function  remove(){
        return "this is remove controllers function";
    }

    function  about($name){
        return "this is remove controllers function $name";
    }
}
