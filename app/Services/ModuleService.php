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
        $modules = Module::findOrFail($id);

        return $modules;
    }

    public function add(array $data): Module
    {
        $modules = Module::create($data);

        return $modules;
    }

    public function update(array $data, int | string $id): Module
    {
        $modules = $this->findById($id);

        $modules->update($data);

        return $modules;
    }

    public function delete(int | string $id): void
    {
        $modules = $this->findById($id);

        $modules->delete();
    }
}
