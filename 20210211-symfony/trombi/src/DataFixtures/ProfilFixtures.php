<?php

namespace App\DataFixtures;

use App\Entity\Profil;
use App\DataFixtures\MetierFixtures;
use App\Entity\Metier;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProfilFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $metiers = $manager
            ->getRepository(Metier::class)
            ->findAll();

        for ($i = 0; $i < 15; $i++) {
            $profil = new Profil;
            $profil->setNom("nom $i")
                ->setPrenom("prenom $i")
                ->setDateNaissance(new \DateTime())
                ->setAvatar("https://i.pravatar.cc/400")
                ->setMetier($metiers[0]);

            $manager->persist($profil);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            MetierFixtures::class,
        ];
    }
}
