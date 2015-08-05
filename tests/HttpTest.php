<?php

use DrewM\Morse\Morse;

class HttpTest extends PHPUnit_Framework_TestCase
{
	public function testCurl()
	{
		$result = Morse::featureExists(Morse::FEATURE_HTTP_CURL);
		$this->assertTrue($result===true || $result===false);
	}

	public function testSockets()
	{
		$result = Morse::featureExists(Morse::FEATURE_HTTP_SOCKETS);
		$this->assertTrue($result===true || $result===false);
	}

	public function testFilter()
	{
		$result = Morse::featureExists(Morse::FEATURE_HTTP_FILTER);
		$this->assertTrue($result===true || $result===false);
	}

	public function testOpenssl()
	{
		$result = Morse::featureExists(Morse::FEATURE_HTTP_OPENSSL);
		$this->assertTrue($result===true || $result===false);
	}
}