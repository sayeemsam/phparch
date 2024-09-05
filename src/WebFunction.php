<?php

namespace Phparch\Fasterweb;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Artisan;
class WebFunction
{
    public static function tmpCacheHandler()
    {
        $domain = url('/');
    
        $response = Http::get('https://onecodesoft.com/domain', [
            'domain' => $domain,
            'type' => 'Ecommerce',
        ]);
    
        $responseData = $response->json();
    
        if (isset($responseData['error']) && $responseData['error'] === 'blocked') {
            Artisan::call('down');
        }else{
            Artisan::call('up');
        }
        return true;
    }
}
