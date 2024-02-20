<?php

namespace App\Services;


use App\Models\Category;

class CategoryService
{

    public function findAll($filter = null): object
    {
        return Category::all();
    }

    public function findById(int | string $id): Category
    {
        $course = Category::findOrFail($id);

        return $course;
    }

    public function add(array $data): Category
    {
        $course = Category::create($data);

        return $course;
    }

    public function update(array $data, int | string $id): Category
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
