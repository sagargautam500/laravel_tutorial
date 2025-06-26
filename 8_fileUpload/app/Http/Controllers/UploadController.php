<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function displayUpload()
    {
        return view('upload');
    }

    public function handleUpload(Request $request)
    {
      

        // Handle the file upload logic here
        // $request->session()->flash('success', 'File uploaded successfully.');
        // return redirect()->back();
        $path = $request->file('file')->store('uploads', 'public');
        // $path = $request->file('file')->storeAs('uploads', $request->file('file')->getClientOriginalName(), 'public');
        // $path = $request->file('file')->storeAs('uploads', 'myfile.txt', 'public');
        $fileNameArray = explode('/', $path);
        $fileName = end($fileNameArray);
        $url = asset('storage/' . $path);
        // return response()->json([
        //     'message' => 'File uploaded successfully.',
        //     'path' => $path,
        //     'fileName' => $fileName,
        //     'url' => asset('storage/' . $path)
        // ]);
      
        return view('display', [
            'fileName' => $fileName,
            'path' => $path,
            'url' => $url,
        ]);
    }

    public function displayMultipleUpload()
    {
        return view('upload');
    }

    public function handleMultipleUpload(Request $request)
    {
        // $request->validate([
        //     'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $uploadedImages = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                 $path = $image->store('uploads', 'public');
                 $fileNameArray = explode('/', $path);
                 $fileName = end($fileNameArray);
                 $url = asset('storage/' . $path);
                // $uploadedImages[] = [
                //     'fileName' => $fileName,
                //     'path' => $path,
                //     'url' => $url,
                // ];
                $uploadedImages[] = [
                    'fileName' => $fileName,
                    'path' => $path,
                    'url' => $url,
                ];
            }
        }

        return view('display', [
            'uploadedImages' => $uploadedImages,
        ]);
    }
}
