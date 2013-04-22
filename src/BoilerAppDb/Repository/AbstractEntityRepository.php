<?php
namespace BoilerAppDb\Repository;
abstract class AbstractEntityRepository extends \Doctrine\ORM\EntityRepository{
    /**
     * @param \BoilerAppDb\Entity\AbstractEntity $oEntity
     * @return \BoilerAppDb\Entity\AbstractEntity
     */
    public function create(\BoilerAppDb\Entity\AbstractEntity $oEntity){
    	$this->_em->persist($oEntity->setEntityCreate(new \DateTime()));
        $this->_em->flush();
        return $oEntity;
    }

    /**
     * @param \BoilerAppDb\Entity\AbstractEntity $oEntity
     * @return \BoilerAppDb\Entity\AbstractEntity
     */
    public function update(\BoilerAppDb\Entity\AbstractEntity $oEntity){
    	$oEntity->setEntityUpdate(new \DateTime());
    	$this->_em->flush();
        return $oEntity;
    }

    /**
     * @param \BoilerAppDb\Entity\AbstractEntity $oEntity
     * @return \BoilerAppDb\Entity\AbstractEntity
     */
    public function remove(\BoilerAppDb\Entity\AbstractEntity $oEntity){
        $this->_em->remove($oEntity);
        $this->_em->flush();
        return $oEntity;
    }
}