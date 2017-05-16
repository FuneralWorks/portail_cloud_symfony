<?php

namespace PortailCloudBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PortailCloudBundle\Entity\Licences;

class LicencesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $licence1 = new Licences();
        $licence1->setSku('548ab');
        $licence1->setDesignation('Licence de voix de type instable');
        $licence1->setQuantity(5);
        $licence1->addProduct($this->getReference('product1'));
        $licence1->addProduct($this->getReference('product2'));

        $manager->persist($licence1);

        $licence2 = new Licences();
        $licence2->setSku('64B12');
        $licence2->setDesignation('Licence de mail de type stabilisé');
        $licence2->setQuantity(2);
        
        $manager->persist($licence2);
        
        $manager->flush();

        $this->addReference('licence1', $licence1);
        $this->addReference('licence2', $licence2);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 5;
    }


}