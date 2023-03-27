<?php

namespace App\Http\Controllers;

use App\Models\student;

class StudentController extends Controller
{
    public function halaman()
    {
        student::where('Nama_Lengkap', 'Rudi sholana')->update([
            'Nama_Lengkap' => "Siti Tabuti",
        ]);
    }
}
