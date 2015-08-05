<?php

use DrewM\Morse\Morse;

class DbTest extends PHPUnit_Framework_TestCase
{
	public function testPdo()
	{
		$result = Morse::featureExists(Morse::FEATURE_DB_PDO);
		$this->assertTrue($result===true || $result===false);
	}

	public function testPdo_Mysql()
	{
		$result = Morse::featureExists(Morse::FEATURE_DB_PDO_MYSQL);
		$this->assertTrue($result===true || $result===false);
	}

	public function testPdo_Sqlite()
	{
		$result = Morse::featureExists(Morse::FEATURE_DB_PDO_SQLITE);
		$this->assertTrue($result===true || $result===false);
	}

	public function testMysqli()
	{
		$result = Morse::featureExists(Morse::FEATURE_DB_MYSQLI);
		$this->assertTrue($result===true || $result===false);
	}

	public function testPdo_Pgsql()
	{
		$result = Morse::featureExists(Morse::FEATURE_DB_PDO_PGSQL);
		$this->assertTrue($result===true || $result===false);
	}
}
