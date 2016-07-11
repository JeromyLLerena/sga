<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class VerifyPermissions
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
		if ($request->session()->has('user')) {
			if ($request->route()->getName() == 'login') {
				return redirect()->route('app.main.dashboard');
			}
			return $next($request);
		} else {
			return redirect()->route('login');
		}
	}
}
