<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name'  => 'Wahyudi',
                'major' => 'Information',
                'age'   => 22,
                'courses'=> ['Pemograman web', 'Database', 'Cloud Computing'],
            ],
            [
                'name'  => 'sisi',
                'major' => 'Sistem Inofrmasi',
                'age' => 23,
                'courses'=> ['UI/UX Design', 'Manajemen Proyek', 'Iot'],
            ],
        ];

        return view('students.index', compact('students'));
    }
}
