<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\Category;
use App\Models\Contactus;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

// send message email --------------------
    public function sendmessage(Request $request)
    {

        $data = new Contactus;
        $data->name = $request->input('Name');
        $data->email = $request->input('Email');
        $data->question = $request->input('Question');
        $data->save();

        return redirect()->route('customer.contactus')->with('success', 'Your question has been sent.');

    }
// --------------------------------------

// get products -----------------------------
// public function GetProducts()
//     {
        
// $data = Product::all();

//         return view('customer.index', compact('data'));

//     }

// --------------------------



// get banner  ----------
public function showBanner(){
    $banners = banner::query()
        ->where('is_active', true)
        ->get();
$data = Product::all();
$category = Category::all();

    return view('customer.index', compact('banners', 'data', 'category'));
}
// -----------------



// show faq custoomer side 
public function showFAQ(){

$faq= Faq::all();
return view('customer.faqs',compact('faq'));
}

// ------------------
}
