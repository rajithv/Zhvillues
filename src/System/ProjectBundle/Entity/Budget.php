<?php

namespace System\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Budget
 */
class Budget
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
     * @var integer
     */
    private $timeEstimate;

    /**
     * @var float
     */
    private $variationPercentage;


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
     * @return Budget
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
     * @return Budget
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
     * @return Budget
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
     * @return Budget
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
     * Set timeEstimate
     *
     * @param integer $timeEstimate
     * @return Budget
     */
    public function setTimeEstimate($timeEstimate)
    {
        $this->timeEstimate = $timeEstimate;
    
        return $this;
    }

    /**
     * Get timeEstimate
     *
     * @return integer 
     */
    public function getTimeEstimate()
    {
        return $this->timeEstimate;
    }

    /**
     * Set variationPercentage
     *
     * @param float $variationPercentage
     * @return Budget
     */
    public function setVariationPercentage($variationPercentage)
    {
        $this->variationPercentage = $variationPercentage;
    
        return $this;
    }

    /**
     * Get variationPercentage
     *
     * @return float 
     */
    public function getVariationPercentage()
    {
        return $this->variationPercentage;
    }
}
