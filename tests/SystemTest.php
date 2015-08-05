<?php

use DrewM\Morse\Morse;

class SystemTest extends PHPUnit_Framework_TestCase
{
	public function testExec()
	{
		$result = Morse::featureExists(Morse::FEATURE_SYSTEM_EXEC);
		$this->assertTrue($result===true || $result===false);
	}

	public function testShell_exec()
	{
		$result = Morse::featureExists(Morse::FEATURE_SYSTEM_SHELL_EXEC);
		$this->assertTrue($result===true || $result===false);
	}

	public function testIni_set()
	{
		$result = Morse::featureExists(Morse::FEATURE_SYSTEM_INI_SET);
		$this->assertTrue($result===true || $result===false);
	}

	public function testSet_time_limit()
	{
		$result = Morse::featureExists(Morse::FEATURE_SYSTEM_SET_TIME_LIMIT);
		$this->assertTrue($result===true || $result===false);
	}

	public function testIgnore_user_abort()
	{
		$result = Morse::featureExists(Morse::FEATURE_SYSTEM_IGNORE_USER_ABORT);
		$this->assertTrue($result===true || $result===false);
	}

	public function testPassthru()
	{
		$result = Morse::featureExists(Morse::FEATURE_SYSTEM_PASSTHRU);
		$this->assertTrue($result===true || $result===false);
	}

	public function testSystem()
	{
		$result = Morse::featureExists(Morse::FEATURE_SYSTEM_SYSTEM);
		$this->assertTrue($result===true || $result===false);
	}

	public function testPopen()
	{
		$result = Morse::featureExists(Morse::FEATURE_SYSTEM_POPEN);
		$this->assertTrue($result===true || $result===false);
	}

	public function testProc_open()
	{
		$result = Morse::featureExists(Morse::FEATURE_SYSTEM_PROC_OPEN);
		$this->assertTrue($result===true || $result===false);
	}

}
