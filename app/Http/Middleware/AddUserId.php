<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\TransformsRequest;
use Illuminate\Support\Facades\Auth;


class AddUserId extends TransformsRequest
{

    public function handle($request, Closure $next, $attribute_name = 'user_id')
    {
        $request->json()->add([$attribute_name => Auth::id()]);
        return $next($request);
    }
}
