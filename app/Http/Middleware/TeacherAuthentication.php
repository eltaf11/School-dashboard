<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class TeacherAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if( Auth::check() )
        {

            if ( Auth::user()->isAdmin() ) {
                return redirect('dashboard/admin');
            }

            else if ( Auth::user()->isTeacher() ) {
                return $next($request);
            }

            else if ( Auth::user()->isStudent() ) {
                return redirect('dashboard/student');

            }
        }

        abort(404);  // for other user throw 404 error
    }
}
