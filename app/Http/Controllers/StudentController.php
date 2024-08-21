<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function dashboard( Request $request): View|Factory|Application
    {

        $query = Activity::with('user')->where('user_id', Auth::user()->id)->latest();


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

    public function show()
    {
        return view('student.add-activity');

    }

    public function create( Request $request): Application|Redirector|RedirectResponse

    {
//       dd($request->all());
        $validRoles = ['act1','act2','act3','act4','act5','act6','act7','act8'];
        $validatedData = $request->validate([
            'description' => 'required',
            'type' =>[ 'required',Rule::in($validRoles)],
            "user_id" => 'required',
        ]);
        Activity::create($validatedData);

        return redirect(route('student.dashboard'));


    }
}
