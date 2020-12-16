<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private UserPasswordEncoderInterface $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
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
        $user = new User();
        $user->setEmail("come.de-mauroy@next-u.fr");
        $password = $this->encoder->encodePassword($user,'root');
        $user->setPassword($password);
        $manager->persist($user);
        $manager->flush();

        $manager->flush();
    }
}
