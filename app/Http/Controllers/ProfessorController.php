<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        $students = User::where('role', 'student')->latest()->simplePaginate(18);
        return view('professor.index', compact('students'));

    }
}
