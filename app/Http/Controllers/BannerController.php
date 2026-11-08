<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BannerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:10240'],
        ]);

        $path = $request->file('image')->store('images', 'public');

        $banner = new banner();
        $banner->image = $path;
        $banner->save();

return redirect()->route('admin.banner.show')->with('success', 'Banner uploaded successfully.');

    }


public function show()
    {
        $data = banner::all();
        // dd($data);
        return view('admin.showingBanner', compact('data'));
    }
public function destroy_banner($id){


banner::findOrFail($id)->delete();
return redirect()->route('admin.banner.show')->with('success', 'Banner deleted successfully.');

}




}

