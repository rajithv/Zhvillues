<?php

namespace System\TrackingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expence
 */
class Expence
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $projectID;

    /**
     * @var float
     */
    private $machineryCost;

    /**
     * @var float
     */
    private $consumableCost;

    /**
     * @var float
     */
    private $hrCost;

    /**
     * @var \DateTime
     */
    private $endingDate;


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
     * Set projectID
     *
     * @param string $projectID
     * @return Expence
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

    /**
     * Set machineryCost
     *
     * @param float $machineryCost
     * @return Expence
     */
    public function setMachineryCost($machineryCost)
    {
        $this->machineryCost = $machineryCost;
    
        return $this;
    }

    /**
     * Get machineryCost
     *
     * @return float 
     */
    public function getMachineryCost()
    {
        return $this->machineryCost;
    }

    /**
     * Set consumableCost
     *
     * @param float $consumableCost
     * @return Expence
     */
    public function setConsumableCost($consumableCost)
    {
        $this->consumableCost = $consumableCost;
    
        return $this;
    }

    /**
     * Get consumableCost
     *
     * @return float 
     */
    public function getConsumableCost()
    {
        return $this->consumableCost;
    }

    /**
     * Set hrCost
     *
     * @param float $hrCost
     * @return Expence
     */
    public function setHrCost($hrCost)
    {
        $this->hrCost = $hrCost;
    
        return $this;
    }

    /**
     * Get hrCost
     *
     * @return float 
     */
    public function getHrCost()
    {
        return $this->hrCost;
    }

    /**
     * Set endingDate
     *
     * @param \DateTime $endingDate
     * @return Expence
     */
    public function setEndingDate($endingDate)
    {
        $this->endingDate = $endingDate;
    
        return $this;
    }

    /**
     * Get endingDate
     *
     * @return \DateTime 
     */
    public function getEndingDate()
    {
        return $this->endingDate;
    }
}
