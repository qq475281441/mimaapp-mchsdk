<?php

namespace mima;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use mima\encrypt\Sign;

class Client
{
	protected $version = '1.0';
	
	public    $client;
	
	protected $appid;
	
	protected $key;
	
	//	public    $gateway = 'https://api.mimaapp.com/';
	public $gateway = 'http://localhost:8080/';
	
	public $sign;
	
	public function __construct($appid, $key)
	{
		$this->appid  = $appid;
		$this->key    = $key;
		$this->client = new GuzzleClient(
			[
				'base_uri' => $this->gateway,
				'headers'  => [
					'appid'        => $appid,
					'Content-Type' => 'application/json'
				]
			]);
		$this->sign   = new Sign($key);
	}
	
	/**
	 * 使用post方式请求
	 * @param       $url
	 * @param array $data
	 * @return array
	 * @throws GuzzleException
	 */
	public function post($url, array $data): array
	{
		$data    = $this->sign->sign($data);
		$result  = $this->client->request('post', ltrim($url, '/'), ['body' => json_encode($data)]);
		$content = $result->getBody()->getContents();
		return json_decode($content, true);
	}
	
	/**
	 * 使用get方式请求
	 * @param       $url
	 * @param array $data
	 * @return array
	 * @throws GuzzleException
	 */
	public function get($url, array $data): array
	{
		$data    = $this->sign->sign($data);
		$result  = $this->client->request('get', ltrim($url, '/'), ['query' => http_build_query($data)]);
		$content = $result->getBody()->getContents();
		return json_decode($content, true);
	}
}