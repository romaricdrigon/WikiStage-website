<?php

namespace WikiStage\Bundle\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\Pbkdf2PasswordEncoder;
use WikiStage\Bundle\CoreBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $admin = new User('admin', 'admin@example.com');

        // Insight raise a violaton when injecting the container,
        // so while this false positive is fixed,
        // we directly create an encoder object
        $encoder = new Pbkdf2PasswordEncoder();

        $admin->setPassword('admin', $encoder);

        $manager->persist($admin);

        $manager->flush();
    }
}
