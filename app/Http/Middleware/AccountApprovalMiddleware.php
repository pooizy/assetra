<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccountApprovalMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->status_akun !== 'disetujui') {
            return redirect()
                ->route('verification.notice')
                ->with('approval_pending', true);
        }

        return $next($request);
    }
}
