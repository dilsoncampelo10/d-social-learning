<?php

namespace App\Services;

use App\Models\Module;

class ModuleService
{

    public function findAll($filter = null): object
    {
        return Module::all();
    }

    public function findById(int | string $id): Module
    {
        $course = Module::findOrFail($id);

        return $course;
    }

    public function add(array $data): Module
    {
        $course = Module::create($data);

        return $course;
    }

    public function update(array $data, int | string $id): Module
    {
        $course = $this->findById($id);

        $course->update($data);

        return $course;
    }

    public function delete(int | string $id): void
    {
        $course = $this->findById($id);

        $course->delete();
    }
}
