<?php

namespace mima;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use mima\encrypt\Sign;

class Client
{
	protected $version = '1.0';
	
	protected $client;
	
	protected $appid;
	
	protected $key;
	
	public    $gateway = 'https://api.mimaapp.com/';
	
	public    $sign;
	
	public function __construct($appid, $key)
	{
		$this->appid = $appid;
		$this->key   = $key;
		$this->sign  = new Sign($key);
	}
	
	public function getClient(): GuzzleClient
	{
		return $this->client = $this->client ?: new GuzzleClient(
			[
				'base_uri' => $this->gateway,
				'headers'  => [
					'appid'        => $this->appid,
					'Content-Type' => 'application/json'
				]
			]);
	}
	
	/**
	 * @return string
	 */
	public function getGateway(): string
	{
		return $this->gateway;
	}
	
	/**
	 * @param string $gateway
	 * @return Client
	 */
	public function setGateway(string $gateway): Client
	{
		$this->gateway = $gateway;
		return $this;
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
		$result  = $this->getClient()->request('post', ltrim($url, '/'), ['body' => json_encode($data)]);
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
		$result  = $this->getClient()->request('get', ltrim($url, '/'), ['query' => http_build_query($data)]);
		$content = $result->getBody()->getContents();
		return json_decode($content, true);
	}
}