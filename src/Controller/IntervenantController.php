<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class IntervenantController extends AbstractController
    {
        /**
         * @Route("/agent", name="agent")
         */

        public function intervenant(){
            $agents = [
                1 => [
                    "lastName" => "Robert",
                    "firstName" => "David",
                    "age" => 30,
                    "published" => true
                ],
                2 => [
                    "lastName" => "Labaste",
                    "firstName" => "Denis",
                    "age" => 29,
                    "published" => true
                ],
                3 => [
                    "lastName" => "Rozand",
                    "firstName" => "Mathieu",
                    "age" => 31,
                    "published" => false
                ],
                4 => [
                    "lastName" => "Despert",
                    "firstName" => "Yoann",
                    "age" => 33,
                    "published" => true
                ],
                5 => [
                    "lastName" => "Dorignac",
                    "firstName" => "Loic",
                    "age" => 34,
                    "published" => false
                ]
            ];
           return $this->render('intervenant.html.twig',[
               'agents' => $agents
           ]);
        }

    }