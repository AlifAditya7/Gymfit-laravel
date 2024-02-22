<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateprofileController extends Controller
{
    /**
     * Update the user's profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        // Update the user's name
        $user = Auth::user();
        $user->name = $request->nama;
        $user->save();

        // Redirect back to the profile page
        return redirect()->route('profile')->with('success', 'Nama berhasil diperbarui');