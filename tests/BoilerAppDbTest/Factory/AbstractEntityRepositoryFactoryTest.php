<?php
namespace BoilerAppDbTest\Factory;
class AbstractEntityRepositoryFactoryTest extends \BoilerAppTest\PHPUnit\TestCase\AbstractTestCase{

	/**
	 * @var \BoilerAppDb\Factory\AbstractEntityRepositoryFactory
	 */
	protected $entityRepositoryFactoryObject;

	/**
	 * @see \BoilerAppTest\PHPUnit\TestCase\AbstractTestCase::setUp()
	 */
	protected function setUp(){
		parent::setUp();
		$this->entityRepositoryFactoryObject = $this->getMockForAbstractClass('BoilerAppDb\Factory\AbstractEntityRepositoryFactory');
	}

	public function testCreateServiceWithName(){
		$this->assertInstanceOf('BoilerAppDbTest\Repository\TestRepository', $this->entityRepositoryFactoryObject->createServiceWithName($this->getServiceManager(), 'BoilerAppDbTest\Repository\TestRepository','BoilerAppDbTest\Repository\TestRepository'));
	}

	/**
	 * @expectedException BadMethodCallException
	 */
	public function testCreateServiceWithNameWithWrongRepositoryName(){
		$this->entityRepositoryFactoryObject->createServiceWithName($this->getServiceManager(), 'Wrong repository','Wrong repository');
	}
}