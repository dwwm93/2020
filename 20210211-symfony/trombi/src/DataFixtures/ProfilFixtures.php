<?php

namespace App\DataFixtures;

use App\Entity\Profil;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProfilFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 15; $i++) {
            $profil = new Profil;
            $profil->setNom("nom $i")
                ->setPrenom("prenom $i")
                ->setDateNaissance(new \DateTime())
                ->setAvatar("https://i.pravatar.cc/400");

            $manager->persist($profil);
        }

        $manager->flush();
    }
}
