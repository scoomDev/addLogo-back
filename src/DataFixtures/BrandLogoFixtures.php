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
            $num = rand(1, 5);
            $brandLogo = new BrandLogo();
            $brandLogo->setBrandName("test$i")
                ->setCreatedAt(new \DateTimeImmutable('now'))
                ->setAccessPwd(crypt('access', 'access'))
                ->setLogo1('/logo1.jpg')
                ->setLogo2('/logo2.jpg')
                ->addColor($this->getReference('color'.$num))
            ;
            $manager->persist($brandLogo);
        }


        $manager->flush();
    }

    public function getDependencies()
    {
        return [BrandColorFixtures::class];
    }
}
