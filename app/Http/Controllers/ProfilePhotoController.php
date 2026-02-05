<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class ProfilePhotoController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'avatar' => 'nullable|string|url|max:2048',
        ]);

        $user->photos()
            ->where('type', 'profile')
            ->get()
            ->each(function ($photo) {
                $photo->delete();
            });


        $user->photos()->create([
            'url' => $request->avatar,
            'type' => 'profile',
        ]);

        return back()->with('success', 'Profile photo updated.');
    }
}
