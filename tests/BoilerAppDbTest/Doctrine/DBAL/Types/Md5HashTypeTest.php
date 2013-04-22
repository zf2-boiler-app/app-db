<?php
namespace BoilerAppDbTest\Doctrine\DBAL\Types;
class Md5HashTypeTest extends \BoilerAppTest\PHPUnit\TestCase\AbstractTestCase{

	/**
	 * @var \BoilerAppDb\Doctrine\DBAL\Types\Md5HashType
	 */
	protected $md5hashType;

	/**
	 * @see \BoilerAppTest\PHPUnit\TestCase\AbstractTestCase::setUp()
	 */
	protected function setUp(){
		parent::setUp();
		if(!\Doctrine\DBAL\Types\Type::hasType('md5hash'))\Doctrine\DBAL\Types\Type::addType('md5hash', '\BoilerAppDb\Doctrine\DBAL\Types\Md5HashType');
		$this->md5hashType = \Doctrine\DBAL\Types\Type::getType('md5hash');
	}

	public function testGetDefaultLength(){
		$this->assertEquals(32, $this->md5hashType->getDefaultLength($this->getServiceManager()->get('doctrine.connection.orm_default')->getDatabasePlatform()));
	}

	public function testConvertToDatabaseValue(){
		$this->assertEquals('95d4ecabeefbbf19fef0e018ae65f154', $this->md5hashType->convertToDatabaseValue('95d4ecabeefbbf19fef0e018ae65f154', $this->getServiceManager()->get('doctrine.connection.orm_default')->getDatabasePlatform()));
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testConvertToDatabaseValueWithWrongValue(){
		$this->md5hashType->convertToDatabaseValue('wrong', $this->getServiceManager()->get('doctrine.connection.orm_default')->getDatabasePlatform());
	}

	public function testGetName(){
		$this->assertEquals('md5hash',$this->md5hashType->getName());
	}
}