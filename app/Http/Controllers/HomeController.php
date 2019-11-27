<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){

        $messages = \App\Message::all();



        return view('home', [
            'messages'=> $messages
            ]);

        
    }
}

?>
