<?php

namespace PortailCloudBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PortailCloudBundle\Entity\Clients;

class ClientsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $client1 = new Clients();
        $client1->setName('EDF');
        $client1->setDescription('Partenaire depuis déjà 30 ans. Fidèle!');
        $client1->setUtilisateurs($this->getReference('utilisateur1'));        
        
        $manager->persist($client1);


        $client2 = new Clients();
        $client2->setName('Veolia');
        $client2->setDescription('Jeune partenaire ambitieux.');
        $client2->setUtilisateurs($this->getReference('utilisateur2'));

        $manager->persist($client2);
        
        $manager->flush();

        $this->addReference('client1', $client1);
        $this->addReference('client2', $client2);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }


}