<?php
namespace BoilerAppDbTest\Doctrine\DBAL\Types;
class EmailTypeTest extends \BoilerAppTest\PHPUnit\TestCase\AbstractTestCase{

	/**
	 * @var \BoilerAppDb\Doctrine\DBAL\Types\EmailType
	 */
	protected $emailType;

	/**
	 * @see \BoilerAppTest\PHPUnit\TestCase\AbstractTestCase::setUp()
	 */
	protected function setUp(){
		parent::setUp();
		if(!\Doctrine\DBAL\Types\Type::hasType('email'))\Doctrine\DBAL\Types\Type::addType('email', '\BoilerAppDb\Doctrine\DBAL\Types\EmailType');
		$this->emailType = \Doctrine\DBAL\Types\Type::getType('email');
	}

	public function testGetDefaultLength(){
		$this->assertEquals(250, $this->emailType->getDefaultLength($this->getServiceManager()->get('doctrine.connection.orm_default')->getDatabasePlatform()));
	}

    public function testConvertToDatabaseValue(){
        $this->assertEquals('test@test.com', $this->emailType->convertToDatabaseValue('test@test.com', $this->getServiceManager()->get('doctrine.connection.orm_default')->getDatabasePlatform()));
    }

	/**
	 * @expectedException InvalidArgumentException
	 */
    public function testConvertToDatabaseValueWithWrongValue(){
    	$this->emailType->convertToDatabaseValue('wrong', $this->getServiceManager()->get('doctrine.connection.orm_default')->getDatabasePlatform());
    }

    public function testGetName(){
        $this->assertEquals('email',$this->emailType->getName());
    }
}