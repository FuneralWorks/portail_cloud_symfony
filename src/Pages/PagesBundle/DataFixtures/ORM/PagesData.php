<?php

namespace Pages\PagesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pages\PagesBundle\Entity\Pages;

class PagesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $page1 = new Pages();
        $page1->setTitre('Wuababdolayopyop');
        $page1->setContenu('
            <div class="row">
                <h4>Item and Rick Stuff</h4>
                <h5>Here I am</h5>
                <p>Lorau ipsoud</p>
            </div>
        ');

        $manager->persist($page1);
        

        $page2 = new Pages();
        $page2->setTitre('Rick and Morty');
        $page2->setContenu('
            <div class="row">
                <h4>I am the Mortiest Morty</h4>
                <h5>I am the Rickest Rick</h5>
                <p>Lorau ipsoudilique</p>
            </div>
        ');

        $manager->persist($page2);


        $manager->flush();

        $this->addReference('page1', $page1);
        $this->addReference('page2', $page2);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 7;
    }


}