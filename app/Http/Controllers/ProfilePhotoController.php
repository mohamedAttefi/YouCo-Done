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
            'avatar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $user->photos()
            ->where('type', 'profile')
            ->get()
            ->each(function ($photo) {
                Storage::disk('public')->delete($photo->filename);
                $photo->delete();
            });

        $path = $request->file('avatar')->store('profiles', 'public');

        $user->photos()->create([
            'filename' => $path,
            'url' => Storage::url($path),
            'type' => 'profile',
        ]);

        return back()->with('success', 'Profile photo updated.');
    }
}
