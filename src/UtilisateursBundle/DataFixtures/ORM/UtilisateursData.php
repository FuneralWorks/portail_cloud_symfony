<?php

namespace PortailCloudBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use UtilisateursBundle\Entity\Utilisateurs;

class UtilisateursData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $utilisateur1 = new Utilisateurs();
        $utilisateur1->setUsername('EDF');
        $utilisateur1->setEmail('edf@gmail.com');
        $utilisateur1->setPassword('edf');        
        
        $manager->persist($utilisateur1);


        $utilisateur2 = new Utilisateurs();
        $utilisateur2->setUsername('Veolia');
        $utilisateur2->setEmail('veolia@gmail.com');
        $utilisateur2->setPassword('veolia');
        
        $manager->persist($utilisateur2);
        

        $manager->flush();

        $this->addReference('utilisateur1', $utilisateur1);
        $this->addReference('utilisateur2', $utilisateur2);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }


}