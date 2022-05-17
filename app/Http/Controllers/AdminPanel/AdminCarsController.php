<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCarsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cars::all();
        return view('admin.cars.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.cars.create', [
            'data' => $data
        ]);
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
        $data = new Cars();
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->category_id;
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
        return redirect('admin/cars');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function show(Cars $cars, $id)
    {
        //
        $data = Cars::find($id);
        return view('admin.cars.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function edit(Cars $cars, $id)
    {
        //
        $data = Cars::find($id);
        $datalist = Category::all();
        return view('admin.cars.edit', [
            'data' => $data,
            'datalist' =>  $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cars $cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cars $cars, $id)
    {
        //
        $data = Cars::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->category_id;
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
        return redirect('admin/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cars $cars, $id)
    {
        //
        $data = Cars::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        
        $data->delete();
        return redirect('admin/cars');
    }
}
