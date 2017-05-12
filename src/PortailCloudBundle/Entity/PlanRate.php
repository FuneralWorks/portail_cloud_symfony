<?php

namespace PortailCloudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanRate
 *
 * @ORM\Table(name="plan_rate")
 * @ORM\Entity(repositoryClass="PortailCloudBundle\Repository\PlanRateRepository")
 */
class PlanRate
{

    /**
    * @var int $product
    * @ORM\ManyToOne(targetEntity="Products")
    * @ORM\JoinColumn(name="products", referencedColumnName="id")
    */
    private $product;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="monthDuration", type="integer", unique=true)
     */
    private $monthDuration;


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
     * Set monthDuration
     *
     * @param integer $monthDuration
     * @return PlanRate
     */
    public function setMonthDuration($monthDuration)
    {
        $this->monthDuration = $monthDuration;

        return $this;
    }

    /**
     * Get monthDuration
     *
     * @return integer 
     */
    public function getMonthDuration()
    {
        return $this->monthDuration;
    }
}
