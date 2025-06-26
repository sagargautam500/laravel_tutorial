<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageGalleryController extends Controller
{
    public function index()
    {
        // Get all files from the 'public/uploads' directory
        // Assumes you have run 'php artisan storage:link'
        $files = Storage::files('public/uploads');

        $images = [];
        foreach ($files as $file) {
            // Check if the file is an image (basic check by extension)
            if (preg_match('/\.(jpg|jpeg|png|gif|bmp|svg)$/i', $file)) {
                $images[] = [
                    'url' => Storage::url($file), // For display
                    'path' => $file               // For deletion
                ];
            }
        }

        // Pass the array of image URLs to the gallery view
        return view('gallery', ['images' => $images]);
    }

    public function deleteImage(Request $request)
    {
        // Validate the request to ensure 'image' is provided
        $request->validate([
            'image_url' => 'required|string',
        ]);

        // Get the image path from the request
        $imagePath = $request->input('image_url');

        // Check if the file exists before attempting to delete it
        if (Storage::exists($imagePath)) {
            Storage::delete($imagePath);
            // Optionally, you can flash a success message to the session
            $request->session()->flash('success', 'Image deleted successfully.');
            return redirect()->back();
        } else {
           
            // If the file does not exist, flash an error message
            $request->session()->flash('error', 'Image not found.');
            return redirect()->back();
        }
    }
}
