<?php


namespace common;


class Utils
{
    public static function JsonResponse($code, $msg, $data=[])
    {
        return json_encode(['code' => $code, 'msg' => $msg, 'data' => $data]);
    }

    public static function SuccessResponse($data=[])
    {
        return self::JsonResponse(200, "请求成功", $data);
    }

    public static function ErrorResponse($msg)
    {
        return self::JsonResponse(500, $msg);
    }
}