<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ExerciseController extends Controller
{
    /**
     * Show a list of all of the application's exercise.
     */
    public function index(): View
    {
        $exercise = DB::table('exercise')->get();

        return view('exercise', ['exercise' => $exercise]);
    }
}
