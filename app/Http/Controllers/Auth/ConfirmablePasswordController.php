<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|ViewContract|View
     */
    public function show(Request $request)
    {
        return view('pages.auth.confirm-password');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $checkAuth = Auth::validate([
            'email' => $request->user()->email,
            'password' => $request->password
        ]);

        return !$checkAuth
            ? back()->withErrors(['password' => __('auth.password')])
            : $this->sendConfirmationResponse($request);
    }

    /**
     * @param $request
     * @return RedirectResponse
     */
    private function sendConfirmationResponse(Request $request): RedirectResponse
    {
        $request->session()->put('auth.password_confirmed_at', time());
        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
