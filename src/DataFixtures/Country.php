<?php

namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class CountryFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++) {
            $country = new Country();
            $country->setName($faker->country);
            $country->setIsoCode($faker->countryCode);
            $manager->persist($country);
        }
        $manager->flush();
    }

}