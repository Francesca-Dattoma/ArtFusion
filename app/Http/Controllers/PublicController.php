<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;

class PublicController extends Controller
{
   public function homepage (){
        return view('welcome');
    }
    public function utente (){
        return view('auth.registerLogin');
    }
    public function user(){
        return view('user');
    }
}
