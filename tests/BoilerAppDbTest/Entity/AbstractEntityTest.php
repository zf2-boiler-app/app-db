<?php
namespace BoilerAppDbTest\Entity;
class AbstractEntityTest extends \BoilerAppTest\PHPUnit\TestCase\AbstractTestCase{

	/**
	 * @var \BoilerAppDb\Entity\AbstractEntity
	 */
	protected $entityObject;

	/**
	 * @see \BoilerAppTest\PHPUnit\TestCase\AbstractTestCase::setUp()
	 */
	protected function setUp(){
		parent::setUp();
		$this->entityObject = $this->getMockForAbstractClass('BoilerAppDb\Entity\AbstractEntity');
	}

	public function testSetEntityCreate(){
		$this->assertInstanceOf('BoilerAppDb\Entity\AbstractEntity', $this->entityObject->setEntityCreate(new \DateTime()));
	}

	public function testGetEntityCreate(){
		$oDate = new \DateTime();
		$this->assertEquals($oDate, $this->entityObject->setEntityCreate($oDate)->getEntityCreate());
	}

	public function testSetEntityUpdate(){
		$this->assertInstanceOf('BoilerAppDb\Entity\AbstractEntity', $this->entityObject->setEntityUpdate(new \DateTime()));
	}

	public function testGetEntityUpdate(){
		$oDate = new \DateTime();
		$this->assertEquals($oDate, $this->entityObject->setEntityUpdate($oDate)->getEntityUpdate());
	}
}