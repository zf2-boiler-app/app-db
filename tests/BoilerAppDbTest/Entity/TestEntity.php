<?php
namespace BoilerAppDbTest\Entity;
/**
 * @\Doctrine\ORM\Mapping\Entity(repositoryClass="\BoilerAppDbTest\Repository\TestRepository")
 */
class TestEntity extends \BoilerAppDb\Entity\AbstractEntity{
	/**
	 * @var int
	 * @\Doctrine\ORM\Mapping\Id
	 * @\Doctrine\ORM\Mapping\Column(type="integer")
	 * @\Doctrine\ORM\Mapping\GeneratedValue(strategy="AUTO")
	 */
	protected $test_id;
}