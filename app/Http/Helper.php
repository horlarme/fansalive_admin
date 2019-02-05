<?php

if (!function_exists('tc')) {
    function tc(Closure $closure)
    {
        return $closure();
    }
}


if (!function_exists('respond')) {
    function respond($data, $statusCode = 200, $statusText = 'success')
    {
        return response()->json([
            "data" => $data,
            'statusText' => $statusText,
            'statusCode' => $statusCode
        ])
        ->setStatusCode($statusCode)
        ->header('Access-Control-Allow-Origin', '*');
    }
}