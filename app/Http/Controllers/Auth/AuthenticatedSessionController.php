<?php

namespace App\Http\Controllers\Auth;

use App\Enums\RolesEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{

    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

  /**
   * Handle an incoming authentication request.
   * @throws ValidationException
   */
    public function store(LoginRequest $request): \Symfony\Component\HttpFoundation\Response
    {
        $request->authenticate();

        $request->session()->regenerate();

        //TODO: This is how we can login of the different access for different people
        $user = Auth::user();
        $route = "/";

        if($user->hasAnyRole([RolesEnum::Admin, RolesEnum::Vendor])){
            // For the above action Inertia will redirect the user to the admin path
            // Here first we passed the path /admin but do not want to pass direct the path
            // for that get the list or routes and find the admin path by ctrl+f and pass /admin and pass the path below
            // Passing difference ==> ('/admin') , route('filament.admin.pages.dashboard')
            return Inertia::location(route('filament.admin.pages.dashboard'));
        } else {
            // For the above action Inertia will redirect the user to the customer path
            $route = route('dashboard', absolute: false);
        }

        return redirect()->intended($route);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
