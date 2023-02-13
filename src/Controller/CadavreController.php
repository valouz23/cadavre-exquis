<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Francais;
use Doctrine\Persistence\ManagerRegistry;

class CadavreController extends AbstractController
{
    #[Route('/cadavre/generator', name: 'app_cadavre')]
    public function createCadavre(ManagerRegistry $doctrine): Response
    {
        $list_sujet = $doctrine->getRepository(Francais::class)->findBy(
            ['fonction' => 'sujet']
        );
        if (!$list_sujet) {
            throw $this->createNotFoundException(
                'Base de donnée vide'
            );
        };
        $s = sizeof($list_sujet);
        $i = random_int(0, $s-1);
        $sujet = $list_sujet[$i];
        $personne = $sujet->getPersonne();

        $list_verbe = $doctrine->getRepository(Francais::class)->findBy([
            'fonction' => 'verbe',
            'personne' => $personne
        ]);
        $v = sizeof($list_verbe);
        $j = random_int(0, $v-1);
        $verbe = $list_verbe[$j];

        $list_complement = $doctrine->getRepository(Francais::class)->findBy([
            'fonction' => 'complement'
        ]);
        $c = sizeof($list_complement);
        $k = random_int(0, $c-1);
        $complement = $list_complement[$k];


        return new Response(
            $sujet->getGroupeDeMots() . " " . $verbe->getGroupeDeMots() . " " . $complement->getGroupeDeMots()
        );
        // return $this->render('cadavre/index.html.twig', [
        //     'controller_name' => 'CadavreController',
        // ]);
    }
}
