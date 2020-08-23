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

   public function buscar(Request $request){
   	$request->validate([
   			'search' => 'required',
   			'max' => 'required'
   	]);

    $KEY = 'AIzaSyC9yRV-PnaFesxj-IjTfTf60E1bAPDAw00';

  	$client = new Google_Client();
  	$client->setDeveloperKey($KEY);

  // Define an object that will be used to make all API requests.
  	$youtube = new Google_Service_YouTube($client);

  	  // Call the search.list method to retrieve results matching the specified
    // query term.
   $searchResponse = $youtube->search->listSearch('id','snippet', array(
      'q' => $request->search,
      'maxResults' => $request->max,
      ));
   }

   public function resultado(){

   }
}
