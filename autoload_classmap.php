<?php
return array(
	//Entities
	'BoilerAppDb\Entity\AbstractEntity' => __DIR__.'/src/BoilerAppDb/Entity/AbstractEntity.php',

	//Factories
	'BoilerAppDb\Factory\AbstractEntityRepositoryFactory' => __DIR__.'/src/BoilerAppDb/Factory/AbstractEntityRepositoryFactory.php',
		
	//Repositories
	'BoilerAppDb\Repository\AbstractEntityRepository' => __DIR__.'/src/BoilerAppDb/Repository/AbstractEntityRepository.php',

	//RowGateway
	'BoilerAppDb\Db\RowGateway\AbstractRowGateway' => __DIR__.'/src/BoilerAppDb/Db/RowGateway/AbstractRowGateway.php',

	//RowGateway features
	'BoilerAppDb\Db\RowGateway\Feature\EventFeature' => __DIR__.'/src/BoilerAppDb/Db/RowGateway/Feature/EventFeature.php',
	'BoilerAppDb\Db\RowGateway\Feature\EventFeature\RowGatewayEvent' => __DIR__.'/src/BoilerAppDb/Db/RowGateway/Feature/EventFeature/RowGatewayEvent.php',

	//TableGateway
	'BoilerAppDb\Db\TableGateway\AbstractTableGateway' => __DIR__.'/src/BoilerAppDb/Db/TableGateway/AbstractTableGateway.php',
	'BoilerAppDb\Db\TableGateway\TableGateway' => __DIR__.'/src/BoilerAppDb/Db/TableGateway/TableGateway.php',

	//TableGateway features
	'BoilerAppDb\Db\TableGateway\Feature\EventFeature' => __DIR__.'/src/BoilerAppDb/Db/TableGateway/Feature/EventFeature.php',
	'BoilerAppDb\Db\TableGateway\Feature\EventFeature\TableGatewayEvent' => __DIR__.'/src/BoilerAppDb/Db/TableGateway/Feature/EventFeature/TableGatewayEvent.php',
	'BoilerAppDb\Db\TableGateway\Feature\MetadataFeature' => __DIR__.'/src/BoilerAppDb/Db/TableGateway/Feature/MetadataFeature.php',
	'BoilerAppDb\Db\TableGateway\Feature\RowGatewayFeature' => __DIR__.'/src/BoilerAppDb/Db/TableGateway/Feature/RowGatewayFeature.php',

	//Types
	'BoilerAppDb\Doctrine\DBAL\Types\AbstractEnumType' => __DIR__.'/src/BoilerAppDb/Doctrine/DBAL/Types/AbstractEnumType.php',
	'BoilerAppDb\Doctrine\DBAL\Types\EmailType' => __DIR__.'/src/BoilerAppDb/Doctrine/DBAL/Types/EmailType.php',
	'BoilerAppDb\Doctrine\DBAL\Types\Md5HashType' => __DIR__.'/src/BoilerAppDb/Doctrine/DBAL/Types/Md5HashType.php'
);