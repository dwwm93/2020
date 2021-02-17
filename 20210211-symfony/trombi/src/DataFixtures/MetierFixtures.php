<?php

namespace App\DataFixtures;

use App\Entity\Metier;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MetierFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $metiers = ["professeur", "développeur", "boulanger"];

        foreach ($metiers as $libelle) {
            $metier = new Metier;
            $metier->setLibelle($libelle);
            $manager->persist($metier);
        }

        $manager->flush();
    }
}
