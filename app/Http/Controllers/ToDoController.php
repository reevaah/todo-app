<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class ToDoController extends Controller
{
    
        public function create(){
            return view('todo');
        }
        
        public function save(request $request){
            $title=$request->input('title');
            $description=$request->input('description');
            $startDate=$request->input('start_date');
            $endDate=$request->input('end_date');
              
            $object = new Todo;
            $object->title = $title;
            $object->description =  $description;
            $object->start_date = $startDate;
            $object->end_date = $endDate;
            $object->save();

            

            // return view('Home');
               return redirect('/');
            // return "data saved";

            // var_dump($title,$description,$startDate,$endDate);


        }
         public function edit(){

         }
         public function update(){
             
         }
}
