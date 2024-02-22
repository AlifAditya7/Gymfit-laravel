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
    public function __invoke(Request $request): View
    {
        $kategori = $request->input('kategori');
        $Nutrisi = DB::table('Nutrisi')->where('kategori', $kategori)->orderBy('nama', 'ASC')->get();

        return view('nutrisi', ['Nutrisi' => $Nutrisi]);
    }
}
