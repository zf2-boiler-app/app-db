<?php
namespace BoilerAppDbTest\Doctrine\DBAL\Types;
class AbstractEnumTypeTest extends \BoilerAppTest\PHPUnit\TestCase\AbstractTestCase{

	/**
	 * @var \BoilerAppDbTest\Doctrine\DBAL\Types\TestEnumType
	 */
	protected $testEnumType;

	/**
	 * @see \BoilerAppTest\PHPUnit\TestCase\AbstractTestCase::setUp()
	 */
	protected function setUp(){
		parent::setUp();
		if(!\Doctrine\DBAL\Types\Type::hasType('testenum'))\Doctrine\DBAL\Types\Type::addType('testenum', '\BoilerAppDbTest\Doctrine\DBAL\Types\TestEnumType');
		$this->testenumType = \Doctrine\DBAL\Types\Type::getType('testenum');
	}

	public function testGetSqlDeclaration(){
		$this->assertEquals('ENUM(`value 1`, `value 2`) COMMENT "(DC2Type:testenum)"', $this->testenumType->getSqlDeclaration(array(), $this->getServiceManager()->get('doctrine.connection.orm_default')->getDatabasePlatform()));
	}

	public function testConvertToPHPValue(){
		$this->assertEquals('test', $this->testenumType->convertToPHPValue('test', $this->getServiceManager()->get('doctrine.connection.orm_default')->getDatabasePlatform()));
	}

	public function testConvertToDatabaseValue(){
		$this->assertEquals('value 1', $this->testenumType->convertToDatabaseValue('value 1', $this->getServiceManager()->get('doctrine.connection.orm_default')->getDatabasePlatform()));
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testConvertToDatabaseValueWithWrongValue(){
		$this->testenumType->convertToDatabaseValue('wrong value', $this->getServiceManager()->get('doctrine.connection.orm_default')->getDatabasePlatform());
	}

	public function testGetName(){
		$this->assertEquals('testenum',$this->testenumType->getName());
	}
}