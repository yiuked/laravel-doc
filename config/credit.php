<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 11:52
 */
return [
    'gateway_url' => 'https://zmopenapi.zmxy.com.cn/openapi.do',
    'charset' => 'utf-8',
    'public_key_file' => realpath(dirname(__FILE__) . '/../app/Library/AliCredit/key/rsa_public_key.pem'),
    'private_key_file' => realpath(dirname(__FILE__) . '/../app/Library/AliCredit/key/rsa_private_key.pem'),
    'platform' => 'zmop',
    'product_code' => 'w1010100100000000001',
    'app_id' => '1001914',
    'merchart_id' => '268821000000041353531',
];