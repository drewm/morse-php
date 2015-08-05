<?php

use DrewM\Morse\Morse;

class FileTest extends PHPUnit_Framework_TestCase
{
	public function testFinfo()
	{
		$result = Morse::featureExists(Morse::FEATURE_FILE_FINFO);
		$this->assertTrue($result===Morse::CLASS_SUPPORT || $result===Morse::FUNCTION_SUPPORT || $result===false);
	}

	public function testZip()
	{
		$result = Morse::featureExists(Morse::FEATURE_FILE_ZIP);
		$this->assertTrue($result===true || $result===false);
	}

}