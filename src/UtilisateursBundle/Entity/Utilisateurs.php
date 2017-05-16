<?php


namespace UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{

    /**
    *
    * @ORM\OneToMany(targetEntity="PortailCloudBundle\Entity\Clients", mappedBy="utilisateurs")
    * @ORM\JoinColumn(name="clients", referencedColumnName="id")
    */
    private $clients;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->clients = new \Doctrine\Common\Collections\ArrayCollection();

    }

    /**
     * Add clients
     *
     * @param \PortailCloudBundle\Entity\Client $clients
     * @return Utilisateurs
     */
    public function addClient(\PortailCloudBundle\Entity\Clients $clients)
    {
        $this->clients[] = $clients;

        return $this;
    }

    /**
     * Remove clients
     *
     * @param \PortailCloudBundle\Entity\Client $clients
     */
    public function removeClient(\PortailCloudBundle\Entity\Clients $clients)
    {
        $this->clients->removeElement($clients);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClients()
    {
        return $this->clients;
    }
}
