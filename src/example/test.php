<?php

use mima\Client;

require '../../vendor/autoload.php';

$client = new Client('791212754', 'LWFug7TGXWc0xhQSapL5afIoJsB5Y559');

$result = $client->get('open/order/list', ['aaa' => 'bbb', 'ccc' => 'ddd']);

print_r($result);


$result = $client->post('open/order/log', ['dddddddd' => 'bbb', 'ccc' => 'ddd']);

print_r($result);