<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;


class StudentController extends Controller
{
    //
    public function data(){
        return view('welcome');
    }
    public function StudentRegisteration(){
        return view('StudentRegisteration');
    }
    public function create(Request $request){
    
       $request->validate([
        'name' =>  'required',
        'email' =>  'required | email',
        'address' =>  'required'
       ]);
         $data = new StudentModel();
      $data->name = $request['name'];
      $data->email = $request['email'];
      $data->address = $request['address'];
      $data->save();

       //    print_r($request->all());
    //    $data = compact('StudentRegisteration');
    //    return view('StudentRegisteration')->with($data);
    //     return view('StudentRegisteration');


    }
}
