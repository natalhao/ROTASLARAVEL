<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller

{
    public function contato(){
        return view('site.principal');
    }
}