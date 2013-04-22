<?php
namespace BoilerAppDbTest\Repository;
class AbstractEntityRepositoryTest extends \BoilerAppTest\PHPUnit\TestCase\AbstractDoctrineTestCase{

	/**
	 * @var \BoilerAppDb\Repository\AbstractEntityRepository
	 */
	protected $entityRepositoryObject;

	/**
	 * @see \BoilerAppTest\PHPUnit\TestCase\AbstractTestCase::setUp()
	 */
	protected function setUp(){
		parent::setUp();
		$this->createDatabase();
		$this->entityRepositoryObject = $this->getServiceManager()->get('BoilerAppDbTest\Repository\TestRepository');
	}

    public function testCreate(){
        $oEntity = $this->entityRepositoryObject->create(new \BoilerAppDbTest\Entity\TestEntity());
        $this->assertInstanceOf('\BoilerAppDbTest\Entity\TestEntity', $oEntity);
        $this->assertInstanceOf('\DateTime', $oEntity->getEntityCreate());
    }

    public function testUpdate(){
    	$oEntity = $this->entityRepositoryObject->update($this->entityRepositoryObject->create(new \BoilerAppDbTest\Entity\TestEntity()));
    	$this->assertInstanceOf('\BoilerAppDbTest\Entity\TestEntity', $oEntity);
    	$this->assertInstanceOf('\DateTime', $oEntity->getEntityUpdate());
    }

    public function testRemove(){
        $oEntity = $this->entityRepositoryObject->create(new \BoilerAppDbTest\Entity\TestEntity());
    	$this->assertInstanceOf('\BoilerAppDbTest\Entity\TestEntity', $this->entityRepositoryObject->remove($oEntity));
    }
}