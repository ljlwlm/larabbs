<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yansongda\LaravelPay\Facades\Pay;

class PaysController extends Controller
{
    public function index()
    {
//        $order =   [
//            'out_trade_no' => time(),
//            'total_amount' => '1',
//            'subject' => 'test subject - 测试',
//        ];
//        return Pay::alipay()->web($order);

        $order = [
            'out_trade_no' => time(),
            'body' => 'subject-测试',
            'total_fee'      => '1',
        ];
        // 扫码支付使用 模式二
       return Pay::wechat()->scan($order);
//        $result = $wechat->scan($order);
// 二维码内容： $qr = $result->code_url;
    }
}
