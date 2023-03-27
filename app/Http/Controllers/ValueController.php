<?php

namespace App\Http\Controllers;

use App\Models\value;

class ValueController extends Controller
{
    public function halaman()
    {
        $student = value::all();
        return view("value", ["studentlist" => $student]);
    }
}
