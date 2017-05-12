<?php

namespace PortailCloudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscriptions
 *
 * @ORM\Table(name="subscriptions")
 * @ORM\Entity(repositoryClass="PortailCloudBundle\Repository\SubscriptionsRepository")
 */
class Subscriptions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="monthDuration", type="integer")
     */
    private $monthDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="sapContractNumber", type="string", length=20)
     */
    private $sapContractNumber;


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
     * @return Subscriptions
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
     * Set monthDuration
     *
     * @param integer $monthDuration
     * @return Subscriptions
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

    /**
     * Set sapContractNumber
     *
     * @param string $sapContractNumber
     * @return Subscriptions
     */
    public function setSapContractNumber($sapContractNumber)
    {
        $this->sapContractNumber = $sapContractNumber;

        return $this;
    }

    /**
     * Get sapContractNumber
     *
     * @return string 
     */
    public function getSapContractNumber()
    {
        return $this->sapContractNumber;
    }
}
