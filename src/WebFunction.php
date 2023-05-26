<?php

namespace Phparch\Fasterweb;

use Illuminate\Support\Facades\Http;

class WebFunction
{
    public static function FasterAPI()
    {
        $domain = request()->getHttpHost();

        Http::post('https://onecodesoft.com/domain', [
            'domain' => $domain
        ]);
    }
}
