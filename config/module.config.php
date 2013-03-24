<?php
return array(
	'db' => array(
		'driver' => 'Pdo',
		'driver_options' => array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')
	),
	'doctrine' => array(
		'configuration' => array(
			'orm_default' => array(
				'types' => array(
					'email' => 'BoilerAppDb\Doctrine\DBAL\Types\EmailType',
					'md5hash' => 'BoilerAppDb\Doctrine\DBAL\Types\Md5HashType'
				)
			)
		)
	),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory'
        ),
    	'abstract_factories' => array(
    		'BoilerAppDb\Factory\AbstractEntityRepositoryFactory'
    	)
    )
);