<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class NutrisiController extends Controller
{
    /**
     * Show a list of all of the application's nutrisi.
     */
    public function index(): View
    {
        $Nutrisi = DB::table('Nutrisi')->get();

        return view('nutrisi', ['Nutrisi' => $Nutrisi]);
    }
}
