<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userControler extends Controller
{
    function userForm(Request $req){
       $req->validate([
        'username'=>'required  | min:3 | max:15',
        'email'=>'required | email',
        'city'=>'required | uppercase',
        'skill'=>'required',
        'gender'=>'required',
        
       ], [
        'username.required'=> 'yako fill mado ',
        'username.min'=> 'lowde more than 3 letter',
        'username.max'=>'lowde_____ball 15 max aste',
        'email.required'=> 'bro enter email bro why blank',
        'city.uppercase'=> "lowde upper case alli bari ",
        'skill.required'=> "guru skill ako yake ondhu elva 🤣"
       ]);
      
        return $req;

    }
}
