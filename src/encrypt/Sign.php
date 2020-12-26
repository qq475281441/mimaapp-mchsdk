<?php

namespace mima\encrypt;

class Sign
{
	protected $key;
	
	public function __construct($key)
	{
		$this->key = $key;
	}
	
	/**
	 * 获得签名后的数组
	 * @param array $data
	 * @return array
	 */
	public function sign(array $data): array
	{
		$data['sign'] = $this->getSign($data);
		return $data;
	}
	
	/**
	 * 获取签名
	 * @param array $data
	 * @return string
	 */
	public function getSign(array $data): string
	{
		$value = array_filter($data);
		ksort($value);//按键名升序
		$str = '';
		foreach ($value as $k => $v) {
			if ($k == 'sign') {
				continue;
			}
			$str .= $k . '=' . $v . '&';
		}
		$str = $str . 'key=' . $this->key;
		return strtoupper(md5($str));
	}
	
	/**
	 * 验证返回数据签名是否正确
	 * @param array $data
	 * @return bool
	 */
	public function checkSign(array $data): bool
	{
		return $data['sign'] == $this->getSign($data);
	}
}