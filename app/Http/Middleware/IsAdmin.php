<?php namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\RedirectResponse;
use App\User;

class IsAdmin {
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
        $result= new User();
        /* if ($user && $user->isAdmin() || count($result->all())==0) */
        if ($user && $user->isAdmin() || $result->all()->isEmpty())  /* Two condition for register page. Either user should be admin or no user at all */
        {
            return $next($request);
        }
        return new RedirectResponse(url('/'));
    }
}
