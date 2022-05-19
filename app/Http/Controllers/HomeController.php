<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cars;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $setting= Setting::first();

        return  view('home.index', [
            'page' => $page,
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'carslist1' => $carslist1
        ]);
    }

    public function cars($id)
    {
        $data = Cars::find($id);
        $images = DB::table('images')->where('cars_id', $id)->get();
        return  view('home.cars', [
            'data' => $data,
            'images' => $images
        ]);
    }

    public function categorycars($id)
    {
        $category = Category::find($id);
        $cars = DB::table('cars')->where('category_id', $id)->get();

        return  view('home.categorycars', [
            'category' => $category,
            'cars' => $cars
        ]);
    }

}
