<?php
/**
 * Created by Damián Imrich / Haze Studio.
 * Date: 23.11.2016
 * Time: 13:19
 */

namespace AndyAm\LaravelGoPaySDK;
use GoPay\GoPay;
use GoPay\Http\Log\Logger as DefLogger;
use GoPay\Http\Request;
use GoPay\Http\Response;

class Logger implements DefLogger
{
    public function logHttpCommunication(Request $request, Response $response)
    {
        GoPay::logHttpCommunication($request, $response);
    }
    
    public function log($message)
    {
        GoPay::log($message);
    }
}