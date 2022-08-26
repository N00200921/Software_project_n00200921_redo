<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dealership;
use Hash;

class Dealershipcontroller extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dealerships = Dealership::all();
        return view('admin.dealership.index', [
            'dealerships' => $dealerships


        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dealership.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

       
        $request->validate([
    
            'manufacturer' => 'required',
            'model' =>'required|max:500',
            'year' => 'required',
            'engine' => 'required',
            'drivetrain' => 'required',
            'color' =>'required',
            'dealership_location' => 'required',
            'dealership_number' => 'required',
            'dealership_image' => 'file|image'
      
            ]);  
    
            $dealership_image = $request->file('dealership_image');
            $filename = $dealership_image->hashName();
    
            $path = $dealership_image->storeAs('public/images', $filename);
    
    
            // if validation passes create the new book
            $dealerships = new Dealership();
            $dealerships->manufacturer = $request->input('manufacturer');
            $dealerships->model = $request->input('model');
            $dealerships->year = $request->input('year');
            $dealerships->engine = $request->input('engine');
            $dealerships->drivetrain = $request->input('drivetrain');
            $dealerships->color = $request->input('color');
            $dealerships->dealership_location = $request->input('dealership_location');
            $dealerships->dealership_number = $request->input('dealership_number');
            $dealerships->image_location = $filename;
            $dealerships->save();
    
    
    
            return redirect()->route('admin.dealership.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dealerships = Dealership::findOrFail($id);
        return view('admin.dealership.show', [
            'dealerships' => $dealerships


        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dealerships = Dealership::all();
        return view('admin.dealership.edit', [
            'dealerships' => $dealerships


        ]);
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
        $dealerships = Dealership::findOrFail($id);
        $request->validate([
            'manufacturer' => 'required',
            'model' =>'required|max:500',
            'year' => 'required',
            'engine' => 'required',
            'drivetrain' => 'required',
            'color' =>'required',
            'dealership_location' => 'required',
            'dealership_number' => 'required',
            ]);  

                
                    $dealerships = new Dealership();
                    $dealerships->manufacturer = $request->input('manufacturer');
                    $dealerships->model = $request->input('model');
                    $dealerships->year = $request->input('year');
                    $dealerships->engine = $request->input('engine');
                    $dealerships->drivetrain = $request->input('drivetrain');
                    $dealerships->color = $request->input('color');
                    $dealerships->dealership_location = $request->input('dealership_location');
                    $dealerships->dealership_number = $request->input('dealership_number');
                    $dealerships->image_location = $filename;
                    $dealerships->save();
            
                    return redirect()->route('admin.dealership.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dealerships = Dealership::findOrFail($id);
        $dealerships->delete();

        return redirect()->route('admin.dealership.index');
    }
}
