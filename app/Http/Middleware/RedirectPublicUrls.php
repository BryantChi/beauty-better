<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectPublicUrls
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
        $path = $request->getPathInfo();
        
        // 檢查是否為 /public 或 /public/ 路徑
        if ($path === '/public' || $path === '/public/') {
            return redirect('/', 301);
        }
        
        // 檢查是否為 /public/其他路徑
        if (strpos($path, '/public/') === 0) {
            $newPath = substr($path, 7); // 移除 /public 部分
            return redirect($newPath ?: '/', 301);
        }
        
        return $next($request);
    }
}
