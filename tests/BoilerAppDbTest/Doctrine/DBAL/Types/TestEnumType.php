<?php
namespace BoilerAppDbTest\Doctrine\DBAL\Types;
class TestEnumType extends \BoilerAppDb\Doctrine\DBAL\Types\AbstractEnumType{
	/**
	 * @var string
	 */
	protected $name = 'testenum';

	/**
	 * @var array
	 */
	protected $values = array(
		'value 1',
		'value 2'
	);
}