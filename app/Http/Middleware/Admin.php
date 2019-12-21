<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
  protected $auth;

    /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    if (empty($this->auth))
    {
      if ($request->ajax()) {
           return response('Unauthorized.', 401);
      }else{
           return redirect()->to('login');
      }

      if($this->auth->user()->email != 'admin@admin')
      {
        if ($request->ajax()) {
             return response('Unauthorized.', 401);
        } else {
             return redirect()->to('/vinilos');
          }
      }
    }
    return $next($request);
  }

}
