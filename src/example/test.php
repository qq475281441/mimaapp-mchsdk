<?php

use mima\Client;

require '../../vendor/autoload.php';

$client = new Client('791212754', 'LWFug7TGXWc0xhQSapL5afIoJsB5Y559');//你的appid和secret

$client->setGateway('http://localhost:8080/');//设置测试网关
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

//代练售后原因
//$result = $client->get('/open/report_reason', ['game_type' => '1']);
//print_r($result);

//echo json_encode($result,JSON_UNESCAPED_UNICODE);
//赔偿原因类型
//$result = $client->get('/open/compensate_reason', ['game_type' => '1']);
//print_r($result);
//echo json_encode($result,JSON_UNESCAPED_UNICODE);

//申请售后
//$result = $client->post('/open/order/apply_report',
//                        [
//	                        'order_num'            => '2012281418623750151',
//	                        'report_reason_id'     => '1',
//	                        'compensate_reason_id' => '1',
//	                        'content'              => '我要退钱',
//	                        'compensate_price'     => '20',
//	                        'refund_amount'        => '20',
//                        ]);
//
//
//
//print_r($result);
//撤销订单
//$result = $client->post('/open/order/cancel',
//                        [
//	                        'order_num'            => '2012251704498743466',
//	                        'a'            => '2012251704498743466',
//	                        'b'            => '2012251704498743466',
//                        ]);
//
//
//
//print_r($result);
//获取消息列表
//$result = $client->get('/open/order/msg',
//                       [
//	                       'order_num' => '2012261646445141971',
//	                       'page'      => 1,
//                       ]);
////
//print_r($result);
//$result = $client->post('/open/order/send_msg',
//                       [
//	                       'order_num' => '2012261646445141971',
//	                       'content'      => '你好，在不在啊，怎么还没打完？在不打完扣你钱',
//                       ]);
//print_r($result);

//$result = $client->get('/open/order/get', ['order_num' => '2012281418623750151']);
//var_dump($result);
//$result = $client->get('/open/order/report_msg_list', ['order_report_id' => '101056']);
//var_dump($result);

//$result = $client->post('/open/order/report_send_msg', ['order_report_id' => '101056','content'=>'我是上家']);
//
//var_dump($result);
//$result = $client->post('/open/order/operate_push', ['order_num' => '2012281418623750151','action'=>'2']);
//
//var_dump($result);
//$result = $client->get('/open/order/report_detail', ['order_report_id' => '101056']);
//
//var_dump($result);
//$result = $client->post('/open/order/confirm_delay', ['order_num' => '2012281623291192810', 'action' => '1']);
//
//var_dump($result);