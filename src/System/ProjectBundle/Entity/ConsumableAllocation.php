<?php

namespace System\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsumableAllocation
 */
class ConsumableAllocation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $consumableID;

    /**
     * @var string
     */
    private $projectID;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set consumableID
     *
     * @param string $consumableID
     * @return ConsumableAllocation
     */
    public function setConsumableID($consumableID)
    {
        $this->consumableID = $consumableID;
    
        return $this;
    }

    /**
     * Get consumableID
     *
     * @return string 
     */
    public function getConsumableID()
    {
        return $this->consumableID;
    }

    /**
     * Set projectID
     *
     * @param string $projectID
     * @return ConsumableAllocation
     */
    public function setProjectID($projectID)
    {
        $this->projectID = $projectID;
    
        return $this;
    }

    /**
     * Get projectID
     *
     * @return string 
     */
    public function getProjectID()
    {
        return $this->projectID;
    }
}
