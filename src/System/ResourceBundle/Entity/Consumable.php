<?php

namespace System\ResourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Consumable
 */
class Consumable
{
    /**
     * @var integer
     */
    private $id;

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
    private $quantity;

    /**
     * @var float
     */
    /**
      * @Assert\Type(type="numeric", message="The value {{ value }} is not a valid number.")
     */
    private $unitValue;

    /**
     * @var float
     */
    /**
      * @Assert\Type(type="numeric", message="The value {{ value }} is not a valid number.")
     */
    private $pendingOrders;

    /**
     * @var float
     */
    /**
      * @Assert\Type(type="numeric", message="The value {{ value }} is not a valid number.")
     */
    private $toBeOrdered;


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
     * Set name
     *
     * @param string $name
     * @return Consumable
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
     * Set quantity
     *
     * @param float $quantity
     * @return Consumable
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return float 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set unitValue
     *
     * @param float $unitValue
     * @return Consumable
     */
    public function setUnitValue($unitValue)
    {
        $this->unitValue = $unitValue;
    
        return $this;
    }

    /**
     * Get unitValue
     *
     * @return float 
     */
    public function getUnitValue()
    {
        return $this->unitValue;
    }

    /**
     * Set pendingOrders
     *
     * @param float $pendingOrders
     * @return Consumable
     */
    public function setPendingOrders($pendingOrders)
    {
        $this->pendingOrders = $pendingOrders;
    
        return $this;
    }

    /**
     * Get pendingOrders
     *
     * @return float 
     */
    public function getPendingOrders()
    {
        return $this->pendingOrders;
    }

    /**
     * Set toBeOrdered
     *
     * @param float $toBeOrdered
     * @return Consumable
     */
    public function setToBeOrdered($toBeOrdered)
    {
        $this->toBeOrdered = $toBeOrdered;
    
        return $this;
    }

    /**
     * Get toBeOrdered
     *
     * @return float 
     */
    public function getToBeOrdered()
    {
        return $this->toBeOrdered;
    }
}
