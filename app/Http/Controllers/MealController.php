<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        // return view('meals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'date' => 'required',
        //     'image' => 'required',
        // ]);
      
        // Meal::create($request->all());
       
        // return redirect()->route('meals.index')
        //                 ->with('success','Meal created successfully.');
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
        // return view('meals.edit',compact('meal'));
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
      
        // $meal->update($request->all());
      
        // return redirect()->route('meals.index')
        //                 ->with('success','Meal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        // $meal->delete();
       
        // return redirect()->route('meals.index')
        //                 ->with('success','Meal deleted successfully');
    }
}
