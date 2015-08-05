<?php

use DrewM\Morse\Morse;

class ImageTest extends PHPUnit_Framework_TestCase
{
	public function testGd()
	{
		$result = Morse::featureExists(Morse::FEATURE_IMAGE_GD);
		$this->assertTrue($result===true || $result===false);
	}

	public function testImagick()
	{
		$result = Morse::featureExists(Morse::FEATURE_IMAGE_IMAGICK);
		$this->assertTrue($result===true || $result===false);
	}

}