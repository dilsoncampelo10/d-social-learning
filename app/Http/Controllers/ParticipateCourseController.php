<?php

namespace App\Http\Controllers;

use App\Services\ParticipateCourseService;
use Illuminate\Http\Request;

class ParticipateCourseController extends Controller
{
    public function __construct(protected ParticipateCourseService $service)
    {
    }
    public function index()
    {
        $participates = $this->service->findAll();
        return response()->json($participates, 200);
    }

    public function store(Request $request)
    {
        $participate = $this->add($request->all());

        return response()->json($participate, 201);
    }


    public function show(int | string $id)
    {
        $participate = $this->service->findById($id);

        return response()->json($participate, 200);
    }


    public function update(Request $request, int | string $id)
    {
        $participate = $this->service->update($request->all(), $id);

        return response()->json($participate, 200);
    }


    public function destroy(int | string $id)
    {
        $participate = $this->service->delete($id);

        return response()->json($participate, 200);
    }
}
