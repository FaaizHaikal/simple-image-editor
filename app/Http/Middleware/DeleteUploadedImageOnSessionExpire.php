<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DeleteUploadedImageOnSessionExpire
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session('uploaded-image-path')) {
            $image_path = public_path('images/uploaded.jpeg');

            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }

        return $next($request);
    }
}
