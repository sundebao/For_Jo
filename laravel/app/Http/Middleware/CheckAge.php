<?php

namespace App\Http\Middleware;

use Closure;
class CheckAge
{
    /**
     * 返回请求过滤器
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    static function handle($request, Closure $next)
    {
      return redirect('/');
        // if ($request->input('age') <= 200) {
        //   return redirect('/');
        // }
        //   return $next($request);
    }

}
