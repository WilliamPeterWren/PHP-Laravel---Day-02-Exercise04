<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostParameterController extends Controller
{
    public function index($id){
        return "hello " . $id;
    }

    public function post($id){
        return "post id: " . $id;
    }

    public function edit($id){
        return "edit id: " . $id;
    }
}