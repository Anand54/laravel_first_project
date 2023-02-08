<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function Index(){
        return view('welcome');
    }
    public function contactMethod(){
         return view('contact');
    } 
      public function aboutMethod(){
         return view('about');
    } 
}
