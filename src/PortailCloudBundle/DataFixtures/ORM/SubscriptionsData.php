<?php

namespace PortailCloudBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PortailCloudBundle\Entity\Subscriptions;

class SubscriptionsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $subscription1 = new Subscriptions();
        $subscription1->setName('Abonnement_EDF');
        $subscription1->setMonthDuration(12);
        $subscription1->setSapContractNumber('88AE54');
        $subscription1->setClient($this->getReference('client1'));
        
        
        $manager->persist($subscription1);


        $subscription2 = new Subscriptions();
        $subscription2->setName('Abonnement_Veolia');
        $subscription2->setMonthDuration(24);
        $subscription2->setSapContractNumber('98EA53');
        $subscription2->setClient($this->getReference('client2'));
        
        $manager->persist($subscription2);
        
        $manager->flush();

        $this->addReference('subscription1', $subscription1);
        $this->addReference('subscription2', $subscription2);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 3;
    }


}