<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(protected CategoryService $service)
    {
    }

    public function index()
    {
        $categories = $this->service->findAll();
        return response()->json($categories, 200);
    }

    public function store(Request $request)
    {
        $category = $this->add($request->all());

        return response()->json($category, 201);
    }

    public function show(int | string $id)
    {
        $category = $this->service->findById($id);

        return response()->json($category, 200);
    }

    public function update(Request $request, int | string $id)
    {
        $category = $this->service->update($request->all(), $id);

        return response()->json($category, 200);
    }

    public function destroy(int | string $id)
    {
        $category = $this->service->delete($id);

        return response()->json($category, 200);
    }
}
