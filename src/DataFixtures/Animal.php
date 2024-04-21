<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\DataFixtures\setCountry;

class AnimalFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        
        for ($i = 0; $i <20; $i++) {
            $animal = new Animal();
            $animal->setName($faker->name);
            $animal->setTailleMoyenne($faker->randomFloat(2, 0.1, 10));
            $animal->setCountry($this->getReference('country' . $faker->numberBetween(0, 19)));
            $animal->setMoyenneVie($faker->numberBetween(1, 100));
            $animal->setArtMartial($faker->word);
            $animal->setPhoneNumber($faker->phoneNumber);
            $manager->persist($animal);
        }

        $manager->flush();
    }
}