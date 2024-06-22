<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::find($request->user_id);
        
        if (!$user) {
            return redirect('login')->with('warning', 'Silahkan login dulu');
        }

        if ($user->role != "Penulis") {
            return response()->json('Anda tidak memili akses modul ini');
        }
        return $next($request);
    }
}
