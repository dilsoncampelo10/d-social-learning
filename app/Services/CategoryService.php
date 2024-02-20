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
        $categories = Category::findOrFail($id);

        return $categories;
    }

    public function add(array $data): Category
    {
        $categories = Category::create($data);

        return $categories;
    }

    public function update(array $data, int | string $id): Category
    {
        $categories = $this->findById($id);

        $categories->update($data);

        return $categories;
    }

    public function delete(int | string $id): void
    {
        $categories = $this->findById($id);

        $categories->delete();
    }
}
