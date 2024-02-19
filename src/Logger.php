<?php
/**
 * Created by Damián Imrich / Haze Studio.
 * Date: 23.11.2016
 * Time: 13:19
 */

namespace AndyAm\LaravelGoPaySDK;
use GoPay\Http\Log\Logger as DefLogger;
use GoPay\Http\Request;
use GoPay\Http\Response;
use Log;

class Logger implements DefLogger
{
    public function logHttpCommunication(Request $request, Response $response)
    {
        $msg = "{$request->method} {$request->url} -> {$response->statusCode}";
        $this->log($msg);
    }
    
    public function log(string $message)
    {
        Log::info("$message\n");
    }
}