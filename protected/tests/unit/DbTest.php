<?php

class DbTest extends PHPUnit_Framework_TestCase 
{
	public function testConnection()
	{
		//$this->assertTrue(true);
                $this->assertNotNull(Yii::app()->db->connectionString);
        }
}
