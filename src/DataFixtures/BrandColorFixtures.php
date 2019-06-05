<?php

namespace App\DataFixtures;

use App\Entity\BrandColor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BrandColorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $arrBrandColor = ['#288590', '#3CAAB5', '#77BC60', '#ED695A', '#E6C228'];

        // Brand Color1
        $brandColor1 = new BrandColor();
        $brandColor1->setHex('#288590')
            ->setCreatedAt(new \DateTimeImmutable('now'))
        ;
        $this->addReference('color1', $brandColor1);
        $manager->persist($brandColor1);

        // Brand Color2
        $brandColor2 = new BrandColor();
        $brandColor2->setHex('#3CAAB5')
            ->setCreatedAt(new \DateTimeImmutable('now'))
        ;
        $this->addReference('color2', $brandColor2);
        $manager->persist($brandColor2);

        // Brand Color3
        $brandColor3 = new BrandColor();
        $brandColor3->setHex('#3CAAB5')
            ->setCreatedAt(new \DateTimeImmutable('now'))
        ;
        $this->addReference('color3', $brandColor3);
        $manager->persist($brandColor3);

        // Brand Color4
        $brandColor4 = new BrandColor();
        $brandColor4->setHex('#3CAAB5')
            ->setCreatedAt(new \DateTimeImmutable('now'))
        ;
        $this->addReference('color4', $brandColor4);
        $manager->persist($brandColor4);

        // Brand Color5
        $brandColor5 = new BrandColor();
        $brandColor5->setHex('#3CAAB5')
            ->setCreatedAt(new \DateTimeImmutable('now'))
        ;
        $this->addReference('color5', $brandColor5);
        $manager->persist($brandColor5);

        $manager->flush();
    }
}
