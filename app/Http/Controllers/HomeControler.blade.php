<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HTTP;

class HomeControler extends Controller
{
   public function index(){
      return view('welcome');
   }
}