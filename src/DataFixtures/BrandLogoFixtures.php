<?php

namespace App\DataFixtures;

use App\Entity\BrandLogo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BrandLogoFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $brandLogo = new BrandLogo();
            $brandLogo->setBrandName("test$i")
                ->setCreatedAt(new \DateTimeImmutable('now'))
                ->setAccessPwd(crypt('access', 'access'))
            ;
            $manager->persist($brandLogo);
        }

        $manager->flush();
    }
}
