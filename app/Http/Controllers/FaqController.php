<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    


   public function store(Request $request)
    {

        

        $data = new Faq();
        $data->question = $request->input('question');
        $data->answer = $request->input('answer');
        $data->save();

return redirect()->route('admin.faq.show')->with('success', 'FAQ added successfully.');

    }


public function show()
     {
         $data = Faq::all();
       
         return view('admin.FAQ.showingFAQ', compact('data'));
     }

 public function destroy_faq($id){


faq::findOrFail($id)->delete();
return redirect()->route('admin.faq.show')->with('success', 'FAQ deleted successfully.');

}






}
