<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController
{
    public function edit()
    {
        $user = Auth::user();

        return view('profile.edit',compact('user'));
    }

    public function update(Request $request)
    {
        // return $request->all();
        $user = Auth::user();
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Example: only allow certain types of images
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('images'), $imageName);
            // $image->storeAs('public/images', $imageName);
        }

        $user->update([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'email'=> $request->email ?? '',
            'image'=> $imageName,
            'bio' => $request->bio ?? ''
        ]);

        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
