<?php

namespace phparch;
use Illuminate\Support\Facades\Http;
class WebFunction
{
    public static function FasterAPI()
    {
        $domain = request()->getHttpHost();

        // Perform the API call to post the domain
        // You can use libraries like Guzzle to make the HTTP request
        // Example: Guzzle HTTP POST request
        // $client = new GuzzleHttp\Client();
        // $client->post('https://example.com/api', [
        //     'json' => ['domain' => $domain]
        // ]);

        // You can also use Laravel's built-in HTTP client
        // Example:
         
         Http::post('https://onecodesoft.com/domain', [
             'domain' => $domain
         ]);
    }
}
