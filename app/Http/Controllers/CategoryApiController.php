<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public function index(){
        return Category::all();
    }

    public function show($id){
        return Category::find($id);
    }

    public function store(){
        $category = new Category;
        $category->name = request()->name;
        $category->save();
        return $category;
    }

    public function update($id){
        $category = Category::find($id);
        $category->name = request()->name;
        $category->save();
        return $category;
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return $category;
    }

}
