<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use ImageOptimizer;

class ImageController extends Controller
{
    function uploadImage(Request $request) {
        if ($request->hasFile('image')) {
            $file = $request->file('image'); // will get all files
            $imageName = time().'_'.$file->getClientOriginalName(); //Get file original name
            $filePath = public_path().'/images/';
            $file->move($filePath, $imageName); // move files to destination folder /public/images/

            Image::create(['section' => 'Static Section',
                          'title' => 'Static Title',
                          'size' => 'Static Size',
                          'materials' => 'Static Materials',
                          'year' => '2023',
                          'file_path' => getenv('APP_URL').'images/'.$imageName,
                          'thumbnail_file_path' => getenv('APP_URL').'images/'.$imageName]);

            ImageOptimizer::optimize($filePath.$imageName);

            return redirect('admin')->with('success', "Image successfully uploaded!");
        } else {
            return redirect('admin')->with('failure', "No image was selected.");
        }
    }
}
