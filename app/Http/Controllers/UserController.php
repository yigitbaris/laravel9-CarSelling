<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Cars;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.index');
    }

    public function reviews()
    {
        $comments = Comment::where('user_id','=', Auth::id())->get();
        return  view('home.user.comments', [
            'comments' => $comments
        ]);
    }

    public function usercar(){
        $cars = Cars::where('user_id','=',Auth::id())->get();
        return view('home.user.usercar',[
           'cars'=>$cars,
        ]);
    }

    public function createcars()
    {
        $data = Category::all();
        $settings= Setting::first();
        return view('home.user.createcars',[
            'data' => $data,
            'settings' => $settings
        ]);
    }

    public function storecars(Request $request)
    {
        $data = new Cars();
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->brand_id = $request->brand_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->year = $request->year;
        $data->fuel = $request->fuel;
        $data->kilometer = $request->kilometer;
        $data->enginepower = $request->enginepower;
        $data->image = $request->image;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect(route('userpanel.usercar'));
    }

    public function imagegallery($cid)
    {
        $cars= Cars::find($cid);
        //$images = Image::where('project_id',$pid);
        $images = DB::table('images')->where('cars_id',$cid)->get();
        return view('home.user.imagegallery',[
            'cars' => $cars,
            'images' => $images,
        ]);
    }

    public function storeimage(Request $request,$cid)
    {
        $data = new Image();
        $data->cars_id = $cid;
        $data->title = $request->title;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect()->route('userpanel.imagegallery',['id'=>$cid]);
    }

    public function editcars(Cars $cars,$id)
    {
        $data = Cars::find($id);
        $datalist = Category::all();
        return view('home.user.editcars',[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    public function updatecars(Request $request, Cars $cars,$id)
    {
        //
        $data = Cars::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->brand_id = $request->brand_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->year = $request->year;
        $data->fuel = $request->fuel;
        $data->kilometer = $request->kilometer;
        $data->enginepower = $request->enginepower;
        $data->image = $request->image;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect(route('userpanel.usercar'));
    }

    public function carsdestroy(Cars $cars,$id)
    {
        $data= Cars::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect(route('userpanel.usercars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function reviewdestroy($id)
    {
        //
        $data = Comment::find($id);
        $data->delete();
        return redirect(route('userpanel.reviews'));
    }
}
