<?php

use DrewM\Morse\Morse;

class CacheTest extends PHPUnit_Framework_TestCase
{
	public function testMemcache()
	{
		$result = Morse::featureExists(Morse::FEATURE_CACHE_MEMCACHE);
		$this->assertTrue($result===true || $result===false);
	}

	public function testMemcached()
	{
		$result = Morse::featureExists(Morse::FEATURE_CACHE_MEMCACHED);
		$this->assertTrue($result===true || $result===false);
	}

	public function testApc()
	{
		$result = Morse::featureExists(Morse::FEATURE_CACHE_APC);
		$this->assertTrue($result===true || $result===false);
	}

	public function testOpcache()
	{
		$result = Morse::featureExists(Morse::FEATURE_CACHE_OPCACHE);
		$this->assertTrue($result===true || $result===false);
	}


}