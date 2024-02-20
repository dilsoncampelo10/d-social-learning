<?php

namespace App\Services;

use App\Models\Unit;
use App\Utils\FileUploadUtil;

class UnitService
{

    public function findAll($filter = null): object
    {
        return Unit::all();
    }

    public function findById(int | string $id): Unit
    {
        $units = Unit::findOrFail($id);

        return $units;
    }

    public function add(array $data): Unit
    {
        $this->uploadFiles($data);

        $units = Unit::create($data);

        return $units;
    }

    public function update(array $data, int | string $id): Unit
    {
        $units = $this->findById($id);

        $this->uploadFiles($data);

        $units->update($data);

        return $units;
    }

    public function delete(int | string $id): void
    {
        $units = $this->findById($id);

        $units->delete();
    }

    private function uploadFiles(array $data)
    {
        $videoPath = FileUploadUtil::uploadFile($data['video'], 'videos');

        $filePath = FileUploadUtil::uploadFile($data['file'], 'files');

        $data['video'] = $videoPath;

        $data['file'] = $filePath;
    }
}
