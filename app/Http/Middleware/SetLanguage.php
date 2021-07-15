<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Setting;

class SetLanguage
{

    public function handle(Request $request, Closure $next)
    {
        $lang = Setting::where('key','lanuguage')->get();

        App::setLocale($lang->value);

        return $next($request);
    }
}
