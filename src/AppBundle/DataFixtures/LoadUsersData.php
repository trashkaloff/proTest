<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Users;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUsersData implements FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $userFirst = new Users();
        $userFirst->setUsername('trash');
        $userFirst->setPassword('0000');

        $manager->persist($userFirst);
        $manager->flush();
    }
}