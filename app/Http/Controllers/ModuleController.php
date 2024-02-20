<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Services\ModuleService;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function __construct(protected ModuleService $service)
    {
    }
    public function index()
    {
        $modules = $this->service->findAll();
        return response()->json($modules, 200);
    }

    public function store(Request $request)
    {
        $module = $this->add($request->all());

        return response()->json($module, 201);
    }


    public function show(int | string $id)
    {
        $module = $this->service->findById($id);

        return response()->json($module, 200);
    }


    public function update(Request $request, int | string $id)
    {
        $module = $this->service->update($request->all(), $id);

        return response()->json($module, 200);
    }


    public function destroy(int | string $id)
    {
        $module = $this->service->delete($id);

        return response()->json($module, 200);
    }
}
