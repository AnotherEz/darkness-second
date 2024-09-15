<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset request form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle a password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the email input
        $request->validate([
            'email' => 'required|email',
        ]);

        // Send password reset link
        $response = Password::sendResetLink($request->only('email'));

        // Check if the reset link was sent successfully
        if ($response == Password::RESET_LINK_SENT) {
            return Redirect::back()->with('status', __($response));
        }

        // If there was an error sending the link, redirect back with an error message
        return Redirect::back()->withErrors([
            'email' => __($response),
        ]);
    }
}
