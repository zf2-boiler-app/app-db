<?php
return array(
	//Entities
	'BoilerAppDb\Entity\AbstractEntity' => __DIR__.'/src/BoilerAppDb/Entity/AbstractEntity.php',

	//Factories
	'BoilerAppDb\Factory\AbstractEntityRepositoryFactory' => __DIR__.'/src/BoilerAppDb/Factory/AbstractEntityRepositoryFactory.php',
		
	//Repositories
	'BoilerAppDb\Repository\AbstractEntityRepository' => __DIR__.'/src/BoilerAppDb/Repository/AbstractEntityRepository.php',

	//Types
	'BoilerAppDb\Doctrine\DBAL\Types\AbstractEnumType' => __DIR__.'/src/BoilerAppDb/Doctrine/DBAL/Types/AbstractEnumType.php',
	'BoilerAppDb\Doctrine\DBAL\Types\EmailType' => __DIR__.'/src/BoilerAppDb/Doctrine/DBAL/Types/EmailType.php',
	'BoilerAppDb\Doctrine\DBAL\Types\Md5HashType' => __DIR__.'/src/BoilerAppDb/Doctrine/DBAL/Types/Md5HashType.php'
);