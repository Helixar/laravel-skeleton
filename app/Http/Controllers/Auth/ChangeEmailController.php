<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ChangeEmailRequest;
use App\Notifications\ChangeEmailNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ChangeEmailController extends Controller
{
    public function store(ChangeEmailRequest $request): RedirectResponse
    {
        $inputs = $request->validated();
        auth()->user()->notify(new ChangeEmailNotification($inputs['new_email']));
        return back()->with('status', 'Nous vous avons envoyé par email a l\'adresse ' . auth()->user()->email . ' le lien de changement de votre adresse email!');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function verify(Request $request): RedirectResponse
    {
        auth()->user()->update([
            'email' => $request->query('email'),
        ]);
        $request->user()->markEmailAsVerified();
        return redirect()->route('profile.index')->with('success', 'Votre email a été modifié');
    }
}
