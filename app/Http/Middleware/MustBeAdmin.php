<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if(!$user) {
            return redirect('login');
        }
        if($user->isAdmin()) {
            return $next($request);
        }
        abort(404, 'You must be an admin to view this.');
    }
}
