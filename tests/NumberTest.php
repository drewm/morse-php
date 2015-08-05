<?php

use DrewM\Morse\Morse;

class NumberTest extends PHPUnit_Framework_TestCase
{
	public function testMultibyte()
	{
		$result = Morse::featureExists(Morse::FEATURE_NUMBER_BIGINT);
		$this->assertTrue($result===true || $result===false);
	}


}