<?php
return array(
	'doctrine' => array(
		'configuration' => array(
			'orm_default' => array(
				'types' => array(
					'email' => 'BoilerAppDb\Doctrine\DBAL\Types\EmailType',
					'md5hash' => 'BoilerAppDb\Doctrine\DBAL\Types\Md5HashType'
				)
			)
		),
		'connection' => array(
			'orm_default' => array(
				'doctrineTypeMappings' => array(
					'enum' => 'string'
				)
			)
		)
	),
    'service_manager' => array(
    	'abstract_factories' => array(
    		'BoilerAppDb\Factory\AbstractEntityRepositoryFactory'
    	)
    )
);