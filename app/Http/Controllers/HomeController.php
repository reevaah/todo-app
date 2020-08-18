<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class HomeController extends Controller
{
    public function index(){
        $todoCollection= Todo::all();
    
        // var_dump($todoCollection);
        $data=[ 'todos'=>$todoCollection];
        return view('Home',$data);
    }
}
