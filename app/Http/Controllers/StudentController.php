<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function dashboard( Request $request): View|Factory|Application
    {

        $query = Activity::where('user_id', Auth::user()->id)->latest();

// Apply the 'type' filter if it's provided
        if ($type = $request->input('type')) {
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


        //
    }
}
