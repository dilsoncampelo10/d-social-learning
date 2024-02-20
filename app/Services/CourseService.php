<?php

namespace App\Services;

use App\Models\Course;

class CourseService
{

    public function findAll($filter = null): object
    {
        return Course::all();
    }

    public function findById(int | string $id): Course
    {
        $course = Course::findOrFail($id);

        return $course;
    }

    public function add(array $data): Course
    {
        $course = Course::create($data);

        return $course;
    }

    public function update(array $data, int | string $id): Course
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
