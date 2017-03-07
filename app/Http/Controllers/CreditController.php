<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Library\AliCredit\ZmopClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CreditController extends Controller
{
    public function getCallback(Request $request) {
        $user = Auth::user();
        if (!empty($user)) {
            $params = $request->get('params');
            $sign = $request->get('sign');

            // 判断串中是否有%，有则需要decode
            $params = strstr ( $params, '%' ) ? urldecode ( $params ) : $params;
            $sign = strstr ( $sign, '%' ) ? urldecode ( $sign ) : $sign;
            $client = new ZmopClient(config('credit.gateway_url'), config('credit.app_id'), config('credit.charset'), config('credit.private_key_file'), config('credit.public_key_file'));
            $result = $client->decryptAndVerifySign ( $params, $sign );
            Log::info(date("Y-m-d H:i:s") . ":" . json_encode($result));
            parse_str($result, $_array);
            if (is_array($_array)) {
                Log::info(date("Y-m-d H:i:s") . ":" . json_encode($_array));
                if ($_array['success'] == 'true') {
                    $user->zmxy_uid = $_array['open_id'];
                    $user->save();
                    return '<script>alert("恭喜，授权成功")</script>';
                }
            }
        }
        return '<script>alert("抱歉，授权失败")</script>';
    }
}
