<?php

namespace App\DataFixtures;

use App\Entity\PhotoCategory;
use App\Entity\Photography;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 5; $i++) {
            $photoCategory = new PhotoCategory();

            $photoCategory->setName('test' . $i);

            $manager->persist($photoCategory);

            for ($j = 1; $j < 5; $j++) {
                $photo = new Photography();

                $photo->setLocation('test' . $j)
                    ->setCategory($photoCategory);

                $manager->persist($photo);
            }
        }

        $manager->flush();
    }
}
