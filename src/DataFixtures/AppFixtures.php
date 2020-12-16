<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $categoryArr = [
            'Cuisine',
            'Voyages',
            'DIY',
            'Beauté et Bien-être',
            'Programmation Orientée-Objet'
        ];
        foreach ($categoryArr as $category){
            $currentCategory = new Category();
            $currentCategory->setName($category);
            $manager->persist($currentCategory);
        }

        $manager->flush();
    }
}
