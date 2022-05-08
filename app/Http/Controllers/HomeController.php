<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $sliderdata=Cars::limit(5)->get();
        $carslist1=Cars::limit(7)->get();
        return  view('home.index',[
            'sliderdata'=>$sliderdata,
            'carslist1'=>$carslist1
        ]);

    }

    public function test(){

        return  view('home.test');
    }

    }
    

