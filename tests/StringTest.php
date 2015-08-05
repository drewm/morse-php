<?php

use DrewM\Morse\Morse;

class StringTest extends PHPUnit_Framework_TestCase
{
	public function testMultibyte()
	{
		$result = Morse::featureExists(Morse::FEATURE_STRING_MULTIBYTE);
		$this->assertTrue($result===true || $result===false);
	}

	public function testTransliterate()
	{
		$result = Morse::featureExists(Morse::FEATURE_STRING_TRANSLITERATE);
		$this->assertTrue($result===Morse::CLASS_SUPPORT || $result===Morse::FUNCTION_SUPPORT || $result===false);
	}

	public function testJson()
	{
		$result = Morse::featureExists(Morse::FEATURE_STRING_JSON);
		$this->assertTrue($result===true || $result===false);
	}

	public function testIconv()
	{
		$result = Morse::featureExists(Morse::FEATURE_STRING_ICONV);
		$this->assertTrue($result===true || $result===false);
	}

	public function testCtype()
	{
		$result = Morse::featureExists(Morse::FEATURE_STRING_CTYPE);
		$this->assertTrue($result===true || $result===false);
	}

	public function testIntl()
	{
		$result = Morse::featureExists(Morse::FEATURE_STRING_INTL);
		$this->assertTrue($result===true || $result===false);
	}
}
