<?php

namespace PortailCloudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="PortailCloudBundle\Repository\ProductsRepository")
 */
class Products
{

    /**
    *
    * @var ArrayCollection Subscriptions $subscriptions
    * @ORM\ManyToMany(targetEntity="Subscriptions", inversedBy="subscriptions")
    * @ORM\JoinTable(name="products_subscriptions",
    *      joinColumns = {@ORM\JoinColumn(name="product_id", referencedColumnName="id")},
    *      inverseJoinColumns = {@ORM\JoinColumn(name="subscription_id", referencedColumnName="id", unique=true)} 
    *    )
    */
    private $subscriptions;


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
     * @ORM\Column(name="subscriptionId", type="string", length=100)
     */
    private $subscriptionId;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;


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
     * Set subscriptionId
     *
     * @param string $subscriptionId
     * @return Products
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * Get subscriptionId
     *
     * @return string 
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return Products
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    public function __construct() {
        $this->subscriptions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add subscriptions
     *
     * @param \PortailCloudBundle\Entity\Subscriptions $subscriptions
     * @return Products
     */
    public function addSubscription(\PortailCloudBundle\Entity\Subscriptions $subscriptions)
    {
        $this->subscriptions[] = $subscriptions;

        return $this;
    }

    /**
     * Remove subscriptions
     *
     * @param \PortailCloudBundle\Entity\Subscriptions $subscriptions
     */
    public function removeSubscription(\PortailCloudBundle\Entity\Subscriptions $subscriptions)
    {
        $this->subscriptions->removeElement($subscriptions);
    }

    /**
     * Get subscriptions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }
}
