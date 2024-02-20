<?php

namespace App\Utils;

use Illuminate\Http\UploadedFile;

class FileUploadUtil
{
    public static function uploadFile(UploadedFile $file, string $path)
    {
        $pathFile = '';
        if ($file->isValid()) {
            $pathFile = $file->store($path, 'public');
        }

        return $pathFile;
    }
}
