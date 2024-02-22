<?php

namespace App\Services;

use App\Models\ParticipateCourse;

class ParticipateCourseService
{

    public function findAll($filter = null): object
    {
        return ParticipateCourse::all();
    }

    public function findById(int | string $id): ParticipateCourse
    {
        $participate = ParticipateCourse::findOrFail($id);

        return $participate;
    }

    public function add(array $data): ParticipateCourse
    {
        $participate = ParticipateCourse::create($data);

        return $participate;
    }

    public function update(array $data, int | string $id): ParticipateCourse
    {
        $participate = $this->findById($id);

        $participate->update($data);

        return $participate;
    }

    public function delete(int | string $id): void
    {
        $participate = $this->findById($id);

        $participate->delete();
    }
}
