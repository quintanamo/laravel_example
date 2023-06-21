<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Image;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    function uploadImage(Request $request) {
        if ($request->hasFile('image')) {
            $file = $request->file('image'); // will get all files
            $imageName = time().'_'.$file->getClientOriginalName(); //Get file original name
            $file->move(public_path().'/images/', $imageName); // move files to destination folder
            return redirect('admin')->with('success', "Image successfully uploaded!");
        } else {
            return redirect('admin')->with('failure', "No image was selected.");
        }
    }
}
