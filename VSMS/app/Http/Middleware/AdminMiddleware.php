<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();
        
        // Check if user is an admin AND has the correct domain
        if ($user->role === 'admin' && str_ends_with($user->email, '@motorcare.com')) {
            return $next($request);
        }

        // Redirect if not authorized
        return redirect()->route('home')->with('error', 'Unauthorized access.');
    }
}
