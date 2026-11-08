<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

public function create (Request $request){

$data = new Category();
$data->name = $request->input('name');
$data->save();

return redirect()->route('create-category')->with('success', 'Category added successfully.');

}

public function show()
     {
         $data = Category::all();
       
         return view('admin.Category.create-category', compact('data'));
     }

     
public function destroy($id)
     {
      
     category::destroy($id);


         return redirect()->route('create-category')->with('success', 'Category deleted successfully.');
     }


}
