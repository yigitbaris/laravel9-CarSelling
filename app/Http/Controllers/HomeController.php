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

    public function   save(Request $request){
        //echo "save Function";
        //echo "<br>name :",$_REQUEST['fname'];
        //echo "<br>Last name :",$_REQUEST['lname'];
        //return view('home.test2',
        [
            'fname' => $_REQUEST['fname'],
            'lname' => $_REQUEST['lname']
        ]);
    } 
    }
    
} 
