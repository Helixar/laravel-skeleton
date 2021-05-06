<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\NewPasswordRequest;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|ViewContract|View
     */
    public function create(Request $request)
    {
        return view('pages.auth.reset-password', ['request' => $request]);
    }

    /**
     * @param NewPasswordRequest $request
     * @return RedirectResponse
     */
    public function store(NewPasswordRequest $request): RedirectResponse
    {
        $status = Password::reset(
            $request->validated(),
            fn($user) => $this->updateValidatedPassword($user, $request)
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withInput($request->only('email'))->withErrors(['email' => __($status)]);
    }

    /**
     * @param $user
     * @param $request
     */
    private function updateValidatedPassword(Model $user,NewPasswordRequest $request): void
    {
        $user->forceFill([
            'password' => Hash::make($request['password']),
            'remember_token' => Str::random(60),
        ])->save();

        event(new PasswordReset($user));
    }
}
