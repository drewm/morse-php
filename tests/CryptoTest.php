<?php

use DrewM\Morse\Morse;

class CryptoTest extends PHPUnit_Framework_TestCase
{
	public function testOpenssl()
	{
		$result = Morse::featureExists(Morse::FEATURE_CRYPTO_OPENSSL);
		$this->assertTrue($result===true || $result===false);
	}

	public function testMcrypt()
	{
		$result = Morse::featureExists(Morse::FEATURE_CRYPTO_MCRYPT);
		$this->assertTrue($result===true || $result===false);
	}

	public function testPassword()
	{
		$result = Morse::featureExists(Morse::FEATURE_CRYPTO_PASSWORD);
		$this->assertTrue($result===true || $result===false);
	}
}