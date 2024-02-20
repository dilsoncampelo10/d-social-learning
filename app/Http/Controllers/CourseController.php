<?php

namespace App\Http\Controllers;

use App\Http\Requests\Courses\CourseRequest;
use App\Models\Course;
use App\Services\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct(protected CourseService $service)
    {
    }
    public function index()
    {
        $courses = $this->service->findAll();
        return response()->json($courses, 200);
    }

    public function store(CourseRequest $request)
    {
        $course = $this->add($request->all());

        return response()->json($course, 201);
    }

    public function show(int | string $id)
    {
        $course = $this->service->findById($id);

        return response()->json($course, 200);
    }



    public function update(Request $request, int | string $id)
    {
        $course = $this->service->update($request->all(), $id);

        return response()->json($course, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int | string $id)
    {
        $course = $this->service->delete($id);

        return response()->json($course, 200);
    }
}
