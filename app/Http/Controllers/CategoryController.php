<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::paginate(10);
       return view('category.index',[
        'categories'=>$categories
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'gender'=>'required|string',
            'email'=>'required|string|unique:categories,email',
            'phone_number'=>'required|string|max:10',
            'program'=>'required|string',
            'residential_stauts'=>'required|string',

        ]);
        category::create($request->all());
        return redirect('/category')->with('status','record created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'gender'=>'required|string',
            'email'=>'required|string|unique:categories,email',
            'phone_number'=>'required|string|max:10',
            'program'=>'required|string',
            'residential_stauts'=>'required|string',

        ]);
        $category->update($request->all());
        return redirect('/category')->with('status','record updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
