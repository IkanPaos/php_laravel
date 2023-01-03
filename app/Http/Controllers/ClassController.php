<?php

namespace App\Http\Controllers;

use App\Models\Classrooms;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $class = Classrooms::all();
        return view('classroom',['classList' => $class]);
    }
}
