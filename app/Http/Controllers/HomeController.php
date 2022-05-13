<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public static function maincategorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();


    }
    
    //
    public function index()
    {
        $page='home';
        $sliderdata = Cars::limit(5)->get();
        $carslist1 = Cars::limit(7)->get();
        return  view('home.index', [
            'page' => $page,
            'sliderdata' => $sliderdata,
            'carslist1' => $carslist1
        ]);
    }

    public function cars($id)
    {
        $images = DB::table('images')->where('cars_id', $id)->get();
        $data = Cars::find($id);
        return  view('home.cars', [
            'data' => $data,
            'images' => $images
        ]);
    }

    public function test()
    {

        return  view('home.test');
    }
}
