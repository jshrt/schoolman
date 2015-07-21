<?php

namespace App\Http\Middleware;

use Closure;
use DatabaseConnection;

class SetProperDatabase
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
       $database_name = "";

        $database_connection = new DatabaseConnection(['database' => $database_name]);

        return $next($request);
    }
}
