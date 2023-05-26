<?php

namespace Phparch\Fasterweb;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Artisan;
class WebFunction
{
    public static function FasterAPI()
    {
        $domain = url('/');
    
        $response = Http::get('https://onecodesoft.com/domain', [
            'domain' => $domain,
            'type' => 'onemart',
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
