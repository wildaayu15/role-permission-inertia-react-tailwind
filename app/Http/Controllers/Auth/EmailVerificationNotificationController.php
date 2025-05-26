<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; // <- Baris penting!
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;
use Inertia\Inertia;
use Inertia\Response;

class EmailVerificationPromptController extends RoutingController
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): Response
    {
        return Inertia::render('Auth/VerifyEmail', [
            'status' => session('status'),
        ]);
    }
}
