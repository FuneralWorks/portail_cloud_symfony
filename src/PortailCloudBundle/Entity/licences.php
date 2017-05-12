<?php

namespace PortailCloudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * licences
 *
 * @ORM\Table(name="licences")
 * @ORM\Entity(repositoryClass="PortailCloudBundle\Repository\LicencesRepository")
 */
class Licences
{

    /**
    *
    * @var ArrayCollection Products $products
    * @ORM\ManyToMany(targetEntity="Products", inversedBy="products")
    * @ORM\JoinTable(name="licences_products",
    *      joinColumns = {@ORM\JoinColumn(name="licences_id", referencedColumnName="id")},
    *      inverseJoinColumns = {@ORM\JoinColumn(name="products_id", referencedColumnName="id", unique=true)} 
    *    )
    */
    private $products;



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
     * @ORM\Column(name="sku", type="string", length=40)
     */
    private $sku;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=200)
     */
    private $designation;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;


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
     * Set sku
     *
     * @param string $sku
     * @return Licences
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return string 
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return Licences
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

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Licences
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    public function __construct() {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
