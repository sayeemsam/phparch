<?php

namespace Phparch\Fasterweb;

use Illuminate\Support\Facades\Http;

class WebFunction
{
    public static function FasterAPI()
    {
        $domain = url('/');

        Http::get('https://onecodesoft.com/domain?domain='.$domain.'&type=onemart');
    }
}
