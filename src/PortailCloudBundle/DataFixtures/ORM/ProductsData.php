<?php

namespace PortailCloudBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PortailCloudBundle\Entity\Products;

class ProductsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $product1 = new Products();
        $product1->setDesignation('Agent voix');
        $product1->setSubscriptionId('867453');
        $product1->addSubscription($this->getReference('subscription1'));
        
        $manager->persist($product1);


        $product2 = new Products();
        $product2->setSubscriptionId('900089');
        $product2->setDesignation('Agent mail');
        $product2->addSubscription($this->getReference('subscription2'));
        
        $manager->persist($product2);
        
        $manager->flush();

        $this->addReference('product1', $product1);
        $this->addReference('product2', $product2);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 4;
    }


}