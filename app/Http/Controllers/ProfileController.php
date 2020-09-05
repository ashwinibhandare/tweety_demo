<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        //dd($user->tweets()->paginate());
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(10),
        ]);
    }

    public function edit(User $user)
    {
//        if (auth()->user()->isNot($user)) {
//            abort(404);
//        }
//-----------------or-------------
//        abort_if(auth()->user()->isNot($user), 404);
//----------------or-------------
//        $this->authorize('edit', $user); or use it in middleware

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {

        $attributes = request()->validate([
            'name' => ['string', 'required', 'max:255'],
            'username' => ['string', 'required', 'max:255', Rule::unique('users')->ignore($user), 'alpha_dash'],
            'email' => ['string', 'required', 'max:255', 'email', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'max:255', 'min:8', 'confirmed'],
            'avatar' => ['file'],
        ]);
        if (request('avatar')) {
        $path = request('avatar')->store('avatars');
        $attributes['avatar'] = $path;
        }
        $user->update($attributes);

        return redirect($user->path());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
