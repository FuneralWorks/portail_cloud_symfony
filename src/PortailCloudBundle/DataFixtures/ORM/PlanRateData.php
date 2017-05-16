<?php

namespace PortailCloudBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PortailCloudBundle\Entity\PlanRate;

class PlanRateData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $planRate1 = new PlanRate();
        $planRate1->setMonthDuration(12);
        $planRate1->setProduct($this->getReference('product1'));

        $manager->persist($planRate1);

        $planRate2 = new PlanRate();
        $planRate2->setMonthDuration(36);
        $planRate2->setProduct($this->getReference('product2'));
        
        $manager->persist($planRate2);
        
        $manager->flush();

        $this->addReference('planRate1', $planRate1);
        $this->addReference('planRate2', $planRate2);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 6;
    }


}