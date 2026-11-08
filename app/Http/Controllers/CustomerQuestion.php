<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;

class CustomerQuestion extends Controller
{
    public function show()
    {


        $data = Contactus::all();

        return view('admin.support-questions', compact('data'));
    }


public function answer($id){

$data = Contactus::find($id);

return view('admin.showingCustomerQuestion', compact('data'));
}

}
