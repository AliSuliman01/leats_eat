<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Response
{
    public static function success($data = null)
    {
        return [
            'success' => true,
            'data' => $data,
        ];
    }

    public static function error($message, $detailed_error = null)
    {
        return [
            'success' => false,
            'message' => $message,
            'detailed_error' => $detailed_error,
        ];
    }

//    public static function createAttributeResponse($attribute)
//    {
//        $response['attribute_id'] = $attribute['attribute']['id'];
//        $response['attribute_type_id'] = Attribute::find($attribute['attribute']['id'])->first()->attribute_type_id;
//            $response['attribute_value'] = $attribute['attribute_value']['int_value'] ??
//            $attribute['attribute_value']['tiny_value'] ??
//            $attribute['attribute_value']['string_value'] ??
//            $attribute['attribute_value']['automated_attribute_value_id'] ??
//            $attribute['attribute_value']['attribute_string_value_translations'] ?? null;
//
//
//        return $response;
//    }
//
//    public static function createAutomatedAttributeResponse($attribute)
//    {
//        $response['id'] = $attribute['id'];
//        $response['attribute_type_id'] = $attribute['attribute_type_id'];
//        $response['attribute_value'] = $attribute['int_value'] ??
//            $attribute['string_value'] ??
//            $attribute['automated_attribute_value_id'] ??
//            $attribute['attribute_string_value_translations'] ??
//            $attribute['tiny_value'] ?? null;
//
//        return $response;
//    }

    public static function createUserActivityRequest($target_id, $target_table_name, $activity_type_id)
    {
        $agent = new UserAgent();
        return [
            'user_id' => Auth::guard('api')->id() ?? null,
            'target_id' => $target_id,
            'target_table_name' => $target_table_name,
            'activity_type_id' => $activity_type_id,
            'ip' => $agent->get_ip(),
            'device_id' => $agent->get_device_id(),
            'platform_version_id' => $agent->get_platform_version(),
            'browser_version_id' => $agent->get_browser_version(),
            'created_at' => Carbon::now(),
        ];
    }
}
