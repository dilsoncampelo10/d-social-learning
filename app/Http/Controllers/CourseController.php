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
        $users = $this->service->findAll();
        return response()->json($users, 200);
    }

    public function store(CourseRequest $request)
    {
        $course = $this->add($request->all());

        return response()->json($course, 201);
    }

    public function show(Course $course)
    {
        //
    }

    public function edit(Course $course)
    {
        //
    }


    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
