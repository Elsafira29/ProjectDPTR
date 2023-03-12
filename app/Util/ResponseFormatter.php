<?php

namespace App\Util;

trait ResponseFormatter
{
    public static function ok($data, $message = "Operation done", $status = 200)
    {
        $payload = array(
            "success" => True,
            "message" => $message,
            "data" => $data,
        );
        return response()->json($payload, $status);
    }

    public static function fail($message, $stack = null, $status = 422)
    {
        $payload = array(
            "success" => False,
            "message" => $message,
            "exception" => $stack
        );
        return response()->json($payload, $status);
    }
}
