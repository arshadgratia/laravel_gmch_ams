<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index(): View
    {
        $students = User::where('role', 'student')->latest()->simplePaginate(12);
        return view('professor.index', compact('students'));

    }

    public function show($id , Request $request):view
    {
        $query = Activity::where('user_id', $id)->latest();


// Apply the 'type' filter if it's provided
        if($type = $request->input('type')){
            $query->where('type', $type);
        }


// Apply the 'search' filter if it's provided
        if ($search = $request->input('search')) {
            $query->where(function ($query) use ($search) {
                $query->where('type', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

// Paginate the results
        $activities = $query->simplePaginate(12);

        return view('student.dashboard',compact('activities'));




    }
}
