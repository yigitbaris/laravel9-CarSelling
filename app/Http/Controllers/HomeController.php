<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        echo "Index Function";
    }

    public function test(){

        return  view('home.test');
    }

    public function param($id, $number){

        //echo "Param Function with id = ".$id;
        //echo "<br/>";
        //echo "Param Function with id = ".$number;
        //echo "<br>Sum parameter : ".($id+$number);

        return view('home.test2',
        [
            'id' => $id,
            'number' => $number
        ]);
    } 
    
} 
