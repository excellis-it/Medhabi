<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ImageTrait
{
    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function imageUpload($file, $path)
    {

        if ($file) {
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $image_path = $file->store($path, 'public');

            return $image_path;
        }
    }

    public function storeMultipleFiles($files, $path)
    {
        $imagePaths = [];

        foreach ($files as $file) {
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $imagePath = $file->store($path, 'public');
            $imagePaths[] = $imagePath; // Store the path for each file
        }

        return $imagePaths; // Return an array of stored file paths
    }
}
