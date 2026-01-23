<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        $user = Auth::user();
        if ($user->role !== 'admin') {
            abort(403, 'Unauthorized access');
        }

        // Check status
        if ($user->status != 1) {
            Auth::logout();
            abort(403, 'Account disabled');
        }
        return $next($request);
    }
}
