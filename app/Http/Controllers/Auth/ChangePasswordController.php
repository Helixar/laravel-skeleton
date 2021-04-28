<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ChangePasswordRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(ChangePasswordRequest $request): RedirectResponse
    {
        $inputs = $request->validated();
        if(strcmp($inputs['current_password'], $inputs['new_password']) === 0){
            return redirect()->back()->with('error','Le nouveau mot de passe doit être différent du mot de passe actuel');
        }
        auth()->user()->update(['password' => Hash::make($inputs['new_password'])]);
        return redirect()->route('profile.index')->with('success', 'Le mot de passe a été modifié');
    }
}
