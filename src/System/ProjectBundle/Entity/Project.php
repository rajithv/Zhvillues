<?php

namespace System\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 */
class Project
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
     * @var string
     */
    private $client;

    /**
     * @var string
     */
    private $manager;

    /**
     * @var string
     */
    private $budget;

    /**
     * @var string
     */
    private $listOfConsumable;

    /**
     * @var string
     */
    private $listOfMachinery;

    /**
     * @var string
     */
    private $listOfHR;

    /**
     * @var string
     */
    private $listOfExpences;

    /**
     * @var \DateTime
     */
    private $dateOfCompletion;

    /**
     * @var string
     */
    private $status;


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
     * @return Project
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
     * Set client
     *
     * @param string $client
     * @return Project
     */
    public function setClient($client)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set manager
     *
     * @param string $manager
     * @return Project
     */
    public function setManager($manager)
    {
        $this->manager = $manager;
    
        return $this;
    }

    /**
     * Get manager
     *
     * @return string 
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set budget
     *
     * @param string $budget
     * @return Project
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    
        return $this;
    }

    /**
     * Get budget
     *
     * @return string 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set listOfConsumable
     *
     * @param string $listOfConsumable
     * @return Project
     */
    public function setListOfConsumable($listOfConsumable)
    {
        $this->listOfConsumable = $listOfConsumable;
    
        return $this;
    }

    /**
     * Get listOfConsumable
     *
     * @return string 
     */
    public function getListOfConsumable()
    {
        return $this->listOfConsumable;
    }

    /**
     * Set listOfMachinery
     *
     * @param string $listOfMachinery
     * @return Project
     */
    public function setListOfMachinery($listOfMachinery)
    {
        $this->listOfMachinery = $listOfMachinery;
    
        return $this;
    }

    /**
     * Get listOfMachinery
     *
     * @return string 
     */
    public function getListOfMachinery()
    {
        return $this->listOfMachinery;
    }

    /**
     * Set listOfHR
     *
     * @param string $listOfHR
     * @return Project
     */
    public function setListOfHR($listOfHR)
    {
        $this->listOfHR = $listOfHR;
    
        return $this;
    }

    /**
     * Get listOfHR
     *
     * @return string 
     */
    public function getListOfHR()
    {
        return $this->listOfHR;
    }

    /**
     * Set listOfExpences
     *
     * @param string $listOfExpences
     * @return Project
     */
    public function setListOfExpences($listOfExpences)
    {
        $this->listOfExpences = $listOfExpences;
    
        return $this;
    }

    /**
     * Get listOfExpences
     *
     * @return string 
     */
    public function getListOfExpences()
    {
        return $this->listOfExpences;
    }

    /**
     * Set dateOfCompletion
     *
     * @param \DateTime $dateOfCompletion
     * @return Project
     */
    public function setDateOfCompletion($dateOfCompletion)
    {
        $this->dateOfCompletion = $dateOfCompletion;
    
        return $this;
    }

    /**
     * Get dateOfCompletion
     *
     * @return \DateTime 
     */
    public function getDateOfCompletion()
    {
        return $this->dateOfCompletion;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Project
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
}
