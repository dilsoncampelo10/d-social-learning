<?php

namespace App\Services;

use App\Models\Course;

class CourseService
{

    public function findAll($filter = null)
    {
        return Course::all();
    }

    public function add(array $data)
    {
        $course = Course::create($data);

        return $course;
    }
}
