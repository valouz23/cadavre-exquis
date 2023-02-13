<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Francais;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $sujet1 = new Francais();
        $sujet1->setGroupeDeMots("Je");
        $sujet1->setFonction("sujet");
        $sujet1->setPersonne("1");
        $manager->persist($sujet1);

        $sujet2 = new Francais();
        $sujet2->setGroupeDeMots("Tu");
        $sujet2->setFonction("sujet");
        $sujet2->setPersonne("2");
        $manager->persist($sujet2);

        $sujet3 = new Francais();
        $sujet3->setGroupeDeMots("Il");
        $sujet3->setFonction("sujet");
        $sujet3->setPersonne("3");
        $manager->persist($sujet3);

        $sujet4 = new Francais();
        $sujet4->setGroupeDeMots("Nous");
        $sujet4->setFonction("sujet");
        $sujet4->setPersonne("4");
        $manager->persist($sujet4);

        $sujet5 = new Francais();
        $sujet5->setGroupeDeMots("Vous");
        $sujet5->setFonction("sujet");
        $sujet5->setPersonne("5");
        $manager->persist($sujet5);

        $sujet6 = new Francais();
        $sujet6->setGroupeDeMots("Elles");
        $sujet6->setFonction("sujet");
        $sujet6->setPersonne("6");
        $manager->persist($sujet6);

        $sujet7 = new Francais();
        $sujet7->setGroupeDeMots("Elle");
        $sujet7->setFonction("sujet");
        $sujet7->setPersonne("3");
        $manager->persist($sujet7);

        $sujet8 = new Francais();
        $sujet8->setGroupeDeMots("Ils");
        $sujet8->setFonction("sujet");
        $sujet8->setPersonne("6");
        $manager->persist($sujet8);

        $sujet9 = new Francais();
        $sujet9->setGroupeDeMots("Les oiseaux bleus");
        $sujet9->setFonction("sujet");
        $sujet9->setPersonne("6");
        $manager->persist($sujet9);

        $sujet11 = new Francais();
        $sujet11->setGroupeDeMots("Le squelette fêlé");
        $sujet11->setFonction("sujet");
        $sujet11->setPersonne("3");
        $manager->persist($sujet11);

        $sujet12 = new Francais();
        $sujet12->setGroupeDeMots("Mon chien d'amour");
        $sujet12->setFonction("sujet");
        $sujet12->setPersonne("3");
        $manager->persist($sujet12);

        $sujet13 = new Francais();
        $sujet13->setGroupeDeMots("Le suspect n°2");
        $sujet13->setFonction("sujet");
        $sujet13->setPersonne("3");
        $manager->persist($sujet13);

        $sujet14 = new Francais();
        $sujet14->setGroupeDeMots("Mes premières amours");
        $sujet14->setFonction("sujet");
        $sujet14->setPersonne("6");
        $manager->persist($sujet14);

        

        

        
        $verbe1 = new Francais();
        $verbe1->setGroupeDeMots("mange un oignon");
        $verbe1->setFonction("verbe");
        $verbe1->setPersonne("1");
        $manager->persist($verbe1);

        $verbe2 = new Francais();
        $verbe2->setGroupeDeMots("manges du pâté");
        $verbe2->setFonction("verbe");
        $verbe2->setPersonne("2");
        $manager->persist($verbe2);

        $verbe3 = new Francais();
        $verbe3->setGroupeDeMots("mange une souris");
        $verbe3->setFonction("verbe");
        $verbe3->setPersonne("3");
        $manager->persist($verbe3);

        $verbe4 = new Francais();
        $verbe4->setGroupeDeMots("mangeons des nouilles");
        $verbe4->setFonction("verbe");
        $verbe4->setPersonne("4");
        $manager->persist($verbe4);

        $verbe5 = new Francais();
        $verbe5->setGroupeDeMots("mangez quelque chose");
        $verbe5->setFonction("verbe");
        $verbe5->setPersonne("5");
        $manager->persist($verbe5);

        $verbe6 = new Francais();
        $verbe6->setGroupeDeMots("mangent des cookies");
        $verbe6->setFonction("verbe");
        $verbe6->setPersonne("6");
        $manager->persist($verbe6);

        $verbe7 = new Francais();
        $verbe7->setGroupeDeMots("finis l'histoire");
        $verbe7->setFonction("verbe");
        $verbe7->setPersonne("1");
        $manager->persist($verbe7);

        $verbe8 = new Francais();
        $verbe8->setGroupeDeMots("finis d'écrire");
        $verbe8->setFonction("verbe");
        $verbe8->setPersonne("2");
        $manager->persist($verbe8);

        $verbe9 = new Francais();
        $verbe9->setGroupeDeMots("finit la vaisselle");
        $verbe9->setFonction("verbe");
        $verbe9->setPersonne("3");
        $manager->persist($verbe9);

        $verbe11 = new Francais();
        $verbe11->setGroupeDeMots("finissez vos propos");
        $verbe11->setFonction("verbe");
        $verbe11->setPersonne("5");
        $manager->persist($verbe11);

        $verbe12 = new Francais();
        $verbe12->setGroupeDeMots("finissent l'arrosage");
        $verbe12->setFonction("verbe");
        $verbe12->setPersonne("6");
        $manager->persist($verbe12);

        $verbe13 = new Francais();
        $verbe13->setGroupeDeMots("finissons la ficelle");
        $verbe13->setFonction("verbe");
        $verbe13->setPersonne("4");
        $manager->persist($verbe13);

        $verbe14 = new Francais();
        $verbe14->setGroupeDeMots("perd");
        $verbe14->setFonction("verbe");
        $verbe14->setPersonne("3");
        $manager->persist($verbe14);




        $complement1 = new Francais();
        $complement1->setGroupeDeMots("en bas à gauche");
        $complement1->setFonction("complement");
        $manager->persist($complement1);

        $complement2 = new Francais();
        $complement2->setGroupeDeMots("dans la jungle");
        $complement2->setFonction("complement");
        $manager->persist($complement2);

        $complement3 = new Francais();
        $complement3->setGroupeDeMots("ce soir");
        $complement3->setFonction("complement");
        $manager->persist($complement3);

        $complement4 = new Francais();
        $complement4->setGroupeDeMots("le 3 de chaque mois");
        $complement4->setFonction("complement");
        $manager->persist($complement4);

        $complement5 = new Francais();
        $complement5->setGroupeDeMots("avant la fin du monde");
        $complement5->setFonction("complement");
        $manager->persist($complement5);

        $complement6 = new Francais();
        $complement6->setGroupeDeMots("dans un complexe sportif");
        $complement6->setFonction("complement");
        $manager->persist($complement6);

        $complement7 = new Francais();
        $complement7->setGroupeDeMots("à 3h du matin");
        $complement7->setFonction("complement");
        $manager->persist($complement7);

        $complement8 = new Francais();
        $complement8->setGroupeDeMots("quand les poules auront des dents");
        $complement8->setFonction("complement");
        $manager->persist($complement8);

        $complement9 = new Francais();
        $complement9->setGroupeDeMots("avec le fusil de Tchekov");
        $complement9->setFonction("complement");
        $manager->persist($complement9);

        $complement11 = new Francais();
        $complement11->setGroupeDeMots("avec le chat mais sans le chien");
        $complement11->setFonction("complement");
        $manager->persist($complement11);

        $complement12 = new Francais();
        $complement12->setGroupeDeMots("contre mon coeur");
        $complement12->setFonction("complement");
        $manager->persist($complement12);

        $complement13 = new Francais();
        $complement13->setGroupeDeMots("dans la pénombre du crépuscule");
        $complement13->setFonction("complement");
        $manager->persist($complement13);

        $complement14 = new Francais();
        $complement14->setGroupeDeMots("observant les massifs montagneux");
        $complement14->setFonction("complement");
        $manager->persist($complement14);

        $manager->flush();
    }
}
