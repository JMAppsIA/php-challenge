<?php

namespace Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Interfaces\CarrierInterface;

require __DIR__ . "/../app/Mobile.php";
require __DIR__ . "/../app/Contact.php";

class MobileTest extends TestCase
{	

	public function tearDown(): void
    {
        m::close();
	}
	
	protected static $contacts;

    
    public static function setUpBeforeClass(): void
    {
        static::$contacts = new \app\Contact;        
    }
    
    public static function tearDownAfterClass(): void
    {
        static::$contacts = null;        
    }  
	
	// /** @test */

	public function it_returns_null_when_name_empty()
	{							
		$mobile = new \app\Mobile($provider);

		$this->assertNull($mobile->makeCallByName('NombrePrueba'));
	}

	public function testWhenContactNotFound()
    {
        $this->assertEquals('', static::$contacts->contactExists());
    }

}

