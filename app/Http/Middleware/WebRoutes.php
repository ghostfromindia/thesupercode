<?php

namespace App\Http\Middleware;

use App\Tracking;
use Closure;
use Illuminate\Support\Facades\Auth;

class WebRoutes
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
        $data['page_url'] =  $request->url();
        $data['action'] =  'WebRoutes';
        if(Auth::user()) {
            $data['user_id'] = Auth::user()->id;
            $data['role'] = 'user';
        }else{
            $data['role'] =  'guest';
        }
        $track = new Tracking();
        $track->fill($data);
        $track->save();
        return $next($request);
    }
}
