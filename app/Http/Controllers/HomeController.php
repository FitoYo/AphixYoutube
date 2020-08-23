<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HTTP;
use App;

class HomeController extends Controller
{
   public function index(){
      return view('welcome');
   }
}
