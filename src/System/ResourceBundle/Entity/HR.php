<?php

namespace System\ResourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * HR
 */
class HR
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    /* 
     * @Assert\NotNull()
     */
    private $code;

    /**
     * @var string
     */
    /*@Assert\NotNull()*/
    private $name;

    /**
     * @var string
     */
    
    
    private $department;

    /**@var string*/
   
    /**
     * @Assert\Length(
     *      min = "10",
     *      max = "10",
     *      exactMessage = "NIC must be EXACTLY 10 characters length"    
     * )
     * @Assert\NotNull()
     */
     private $idNo;

    /**
     * @var float
     */
     /**
      * @Assert\Type(type="numeric", message="The value {{ value }} is not a valid number.")
     */
    private $rateHour;


    /**
     * @var string
     */
    private $project;


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
     * @return HR
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
     * @return HR
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
     * Set department
     *
     * @param string $department
     * @return HR
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    
        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set idNo
     *
     * @param string $idNo
     * @return HR
     */
    public function setIdNo($idNo)
    {
        $this->idNo = $idNo;
    
        return $this;
    }

    /**
     * Get idNo
     *
     * @return string 
     */
    public function getIdNo()
    {
        return $this->idNo;
    }

    /**
     * Set rateHour
     *
     * @param float $rateHour
     * @return HR
     */
    public function setRateHour($rateHour)
    {
        $this->rateHour = $rateHour;
    
        return $this;
    }

    /**
     * Get rateHour
     *
     * @return float 
     */
    public function getRateHour()
    {
        return $this->rateHour;
    }

    /**
     * Set project
     *
     * @param string $project
     * @return HR
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
}
