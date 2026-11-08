<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    // admin side subcategory show
public function show(){


$data=Category::all();
$categories=Subcategory::all();
return view('admin.category.create-subcategory',compact('data','categories'));


}    




public function create (request $request){





$data=new Subcategory();
$data->category_id=$request->category_id;
$data->name=$request->name;
$data->save();

return redirect()->route('create-subcategory')->with('success','SubCategory Created Successfully');

}



public function destroy($id){

subcategory::findOrFail($id)->delete();
return redirect()->route('create-subcategory')->with('success','SubCategory Deleted Successfully');


}


// _____________________________________________________________________________________________________________________________________________________________________________________
// customer side subcategory show

public function showPage($id){

$subdata=Subcategory::all();
$products=Product::where('sub_category_id',$id)->get();
return view('customer.SubcategoryPage',compact('subdata',  'products'));


}






 
}
