<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class ProfileController extends AbstractController
    {
        /**
        * @Route("/oss", name="oss_117")
        */

        public function missions(){

            $missions = ['Gros bof','naze','pas drôle','Jean Dujardin','Jtaime pas'];

            return $this->render('oss.html.twig',[
                'missions' => $missions
                ]);

        }


    }