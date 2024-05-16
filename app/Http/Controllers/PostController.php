<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Check;

class PostController extends Controller
{
    public function __construct(){
        echo 'post controller constructor<br><br>';
    }

    public function index(){
        return "hello index method";
    }

    public function create(){
        return "hello create method";
    }

    public function show(){
        return "function show";
    }

    public function post(){
        return "hello post method";
    }


    public function edit(){
        return "hello edit method";
    }
}