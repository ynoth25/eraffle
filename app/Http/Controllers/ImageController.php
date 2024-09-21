<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display the specified image.
     *
     * @param  Request  $request
     * @param  string  $disk
     * @param  string  $filename
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(Request $request, $disk, $filename)
    {
        // Validate the disk
        if (!in_array($disk, ['sachets', 'ids'])) {
            abort(404);
        }

        // Construct the full file path
        // Assuming $filename includes the path relative to the disk root
        $filePath = $filename;

        // Get the disk storage
        $diskStorage = Storage::disk($disk);

        // Check if file exists
        if (!$diskStorage->exists($filePath)) {
            abort(404);
        }

        // Return the file response
        return response()->file($diskStorage->path($filePath));
    }
}
