<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request) {
        $request->validate([
            'uploaded-image-file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

            
        if ($request->file('uploaded-image-file')) {
            $image_path = 'images/uploaded.jpeg'; 
            $request->file('uploaded-image-file')->move(public_path('images'), 'uploaded.jpeg');

            return back()->with('success', 'Image uploaded successfully')->with('uploaded-image-path', $image_path);
        }

        return back()->withErrors('Failed to upload image.');
    }

    // TODO: Implement edit method
    // public function edit (Request $request) {

    // }
}
