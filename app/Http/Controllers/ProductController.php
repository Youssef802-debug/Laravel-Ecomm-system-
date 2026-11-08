<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function show(){


$category = Category::all();
$subcategory = Subcategory::all();

return view('admin.products',compact('category','subcategory'));


}    

public function create(Request $request){


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'amount' => ['required', 'integer', 'min:0'],
            'subcategory_id' => ['required', 'exists:sub_categories,id'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:10240'],
        ]);

        $path = $request->file('image')->store('images', 'public');

        $data = new Product();
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->price = $request->input('price');
        $data->amount = $request->input('amount');
        $data->image = $path;
        $data->sub_category_id = $request->input('subcategory_id');
        $data->save();

return redirect()->route('create-product')->with('success', 'Product created successfully.');



}

}
