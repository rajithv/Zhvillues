<?php

namespace System\ResourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Machinery
 */
class Machinery
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    /*@Assert\NotNull()*/
    private $name;

    /**
     * @var float
     */
     /**
      * @Assert\Type(type="numeric", message="The value {{ value }} is not a valid number.")
     */
    private $netPresentValue;

    /**
     * @var float
     */
     /**
      * @Assert\Type(type="numeric", message="The value {{ value }} is not a valid number.")
     */
    private $opCostHour;

    /**
     * @var float
     */
     /**
      * @Assert\Type(type="numeric", message="The value {{ value }} is not a valid number.")
     */
    private $depRate;

    /**
     * @var string
     */
    private $project;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $operator;


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
     * Set code
     *
     * @param string $code
     * @return Machinery
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Machinery
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set netPresentValue
     *
     * @param float $netPresentValue
     * @return Machinery
     */
    public function setNetPresentValue($netPresentValue)
    {
        $this->netPresentValue = $netPresentValue;
    
        return $this;
    }

    /**
     * Get netPresentValue
     *
     * @return float 
     */
    public function getNetPresentValue()
    {
        return $this->netPresentValue;
    }

    /**
     * Set opCostHour
     *
     * @param float $opCostHour
     * @return Machinery
     */
    public function setOpCostHour($opCostHour)
    {
        $this->opCostHour = $opCostHour;
    
        return $this;
    }

    /**
     * Get opCostHour
     *
     * @return float 
     */
    public function getOpCostHour()
    {
        return $this->opCostHour;
    }

    /**
     * Set depRate
     *
     * @param float $depRate
     * @return Machinery
     */
    public function setDepRate($depRate)
    {
        $this->depRate = $depRate;
    
        return $this;
    }

    /**
     * Get depRate
     *
     * @return float 
     */
    public function getDepRate()
    {
        return $this->depRate;
    }

    /**
     * Set project
     *
     * @param string $project
     * @return Machinery
     */
    public function setProject($project)
    {
        $this->project = $project;
    
        return $this;
    }

    /**
     * Get project
     *
     * @return string 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Machinery
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set operator
     *
     * @param string $operator
     * @return Machinery
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    
        return $this;
    }

    /**
     * Get operator
     *
     * @return string 
     */
    public function getOperator()
    {
        return $this->operator;
    }
}
