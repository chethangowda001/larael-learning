<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class crudController extends Controller
{
    function crud(){
        $users = DB::select('select * from users');

        return response()->json($users);
        return view("data",['users'=>$users]);
    }
}
