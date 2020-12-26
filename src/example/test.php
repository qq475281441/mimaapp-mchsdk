<?php

use mima\Client;

require '../../vendor/autoload.php';

$client = new Client('791212754', 'LWFug7TGXWc0xhQSapL5afIoJsB5Y559');

$client->setGateway('http://localhost:8080/');
//
//$result = $client->get('open/order/list', ['aaa' => 'bbb', 'ccc' => 'ddd']);
//
//print_r($result);
//
//
//$result = $client->post('open/order/log', ['dddddddd' => 'bbb', 'ccc' => 'ddd']);
//
//print_r($result);

//[
//			                'order_num|订单号'       => 'checkOrderNum',
//			                'game_type|游戏类型'      => 'require|eq:1',//1:王者荣耀
//			                'ringer_type|代练类型'    => 'require|eq:1',//1:段位代练
//			                'price|订单价格'          => 'require|gt:0',//元
//			                'title|代练标题'          => 'require|length:1,255',
//			                'partition_id|游戏区服'   => 'require|gt:0',//游戏区服
//			                'user_remark|订单备注'    => 'length:1,800',
//			                'speed_deposit|效率保证金' => 'gt:0',
//			                'safe_deposit|安全保证金'  => 'gt:0',
//			                'estimated_time|代练时长' => 'require|gt:0',//分钟
//			                'game_account|游戏帐号'   => 'require|length:1,50',
//			                'game_password|游戏密码'  => 'require|length:1,50',
//			                'buyer_phone|买家手机号'   => ['require', 'regex' => BaseValidate::validatePhoneReg],
//			                'appoint_id|指定密马代练员'  => BaseValidate::validateBigInt,
//		                ]

//$result = $client->post('open/order/build',
//                        [
//	                        'game_type'      => '1',
//	                        'ringer_type'    => '1',
//	                        'price'          => '20',
//	                        'title'          => '防沉迷 白银3 2 星 - 黄金1 3星  铭文120 关定位',
//	                        'partition_id'   => '3233',
//	                        'user_remark'    => '',
//	                        'speed_deposit'  => '25',
//	                        'safe_deposit'   => '25',
//	                        'estimated_time' => '600',
//	                        'game_account'   => 'qq123',
//	                        'game_password'  => 'pwd123',
//	                        'buyer_phone'    => '13560800000',
//	                        'appoint_id'     => '0',
//                        ]);
//
//print_r($result);


$result = $client->get('/open/report_reason', ['game_type'      => '1']);

print_r($result);