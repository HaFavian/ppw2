<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaController extends Controller
{
 public function about() 
 {
    return view('about');
 }

 public function education() 
 {
    return view('education');
 }

 public function projects() 
 {
    return view('projects');
 }

 public function __construct()
 {
     $this->middleware('auth');
 }

}