<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HTTP;
use App;
use Google_Client;
use Google_Service_YouTube;

class HomeController extends Controller
{
   public function index(){
      return view('welcome');
   }

   public function buscar(Request $request){
    $request->validate([
   			'search' => 'required',
   			'max' => 'required'
   	]);

    $KEY = 'AIzaSyC9yRV-PnaFesxj-IjTfTf60E1bAPDAw00';

  	$client = new Google_Client();
  	$client->setDeveloperKey($KEY);

  	$youtube = new Google_Service_YouTube($client);


   $results = $youtube->search->listSearch('id,sneppet', array('q' => $request->search, 'maxResults' => $request->max));

    return view('resultado', compact('results'));
   }

   public function back(){
   	return view('welcome');
   }
}
