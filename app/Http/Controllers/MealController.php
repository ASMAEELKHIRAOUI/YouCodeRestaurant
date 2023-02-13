<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Http\Requests\StoreMealRequest;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $meals = Meal::latest();
      
        // return view('dashboard',compact('meals'))
        //     ->with('i', request());

        $meals= Meal::all();
        return view('dashboard')->with('meals', $meals);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Meal $meal ,StoreMealRequest $request)
    {
        $meal -> store($request->validate());
        // $tt = $request->all()
        // return $tt;
        // dd("hghghg");
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'date' => 'required',
        //     'image' => 'required',
        // ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Meal::create($input);
        

        // Meal::create($input);
        return redirect()->route('dashboard');

        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        return view('dashboard',compact('meal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        return view('edit',['meal' => $meal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'date' => 'required',
        //     'image' => 'required',
        // ]);
      
        $meal->update($request->all());
      
        return redirect()->route('dashboard')->with('success','Meal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        $meal->delete();
       
        return redirect()->route('dashboard')->with('success','Meal deleted successfully');
    }


}
