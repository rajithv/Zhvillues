<?php

namespace System\NavigationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectManagerHome
 */
class ProjectManagerHome
{
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
