<?php
return array(
	'doctrine' => array(
		'connection' => array(
			'orm_default' => array(
				'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
				'params' => array(
					'host'     => 'localhost',
					'user'     => 'root',
					'password' => '',
					'dbname'   => 'app-db-tests'
				)
			)
		),
		'driver' => array(
			'BoilerAppDbTest_driver' => array(
				'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
				'cache' => 'array',
				'paths' => array(__DIR__.'/BoilerAppDbTest/Entity')
			),
			'orm_default' => array(
				'drivers' => array(
					'BoilerAppDbTest\Entity' => 'BoilerAppDbTest_driver'
				)
			)
		)
	)
);