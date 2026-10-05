<?php
namespace App\Controllers\Instructor;

use App\Controllers\BaseController;

class CourseController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kelola Kursus Saya',
            // Mock data for now, ideally fetched from CourseModel
            'courses' => [
                ['id' => 1, 'title' => 'Fundamental Next.js', 'status' => 'Aktif', 'students' => 120, 'revenue' => 'Rp 2.500.000'],
                ['id' => 2, 'title' => 'UI/UX Design Masterclass', 'status' => 'Draft', 'students' => 0, 'revenue' => 'Rp 0'],
            ]
        ];
        return view('instructor/courses/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Buat Kursus Baru'
        ];
        return view('instructor/courses/create', $data);
    }
}
