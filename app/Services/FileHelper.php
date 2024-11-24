<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileHelper
{
    /**
     * Upload a file to the specified folder.
     *
     * @param \Illuminate\Http\UploadedFile|null $file
     * @param string $folder
     * @return string|null
     */
    public static function uploadFile($file, $folder)
    {
        if ($file) {
            // Store the file and return the file name
            return $file->store($folder, 'public');
        }

        return null;
    }
}
