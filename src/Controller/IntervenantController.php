<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class IntervenantController extends AbstractController
    {
        //Je crée une nouvelle route vers les infos de chaque agent
        /**
        * @Route("/agent/{id}", name="intervenant_show")
        */

        //Ainsi qu'une methode contenant le tableau des agents, ainsi qu'un id pour chaque agent
        public function intervenantShow($id){

            $agents = [
                1 => [
                    "id" => 1,
                    "lastName" => "Robert",
                    "firstName" => "David",
                    "age" => 30,
                    "published" => true
                ],
                2 => [
                    "id" => 2,
                    "lastName" => "Labaste",
                    "firstName" => "Denis",
                    "age" => 29,
                    "published" => true
                ],
                3 => [
                    "id" => 3,
                    "lastName" => "Rozand",
                    "firstName" => "Mathieu",
                    "age" => 31,
                    "published" => false
                ],
                4 => [
                    "id" => 4,
                    "lastName" => "Despert",
                    "firstName" => "Yoann",
                    "age" => 33,
                    "published" => true
                ],
                5 => [
                    "id" => 5,
                    "lastName" => "Dorignac",
                    "firstName" => "Loic",
                    "age" => 34,
                    "published" => false
                ]
            ];

            //Je crée une variable contenant l'id de chaque agent dans le tableau agent
            $agent = $agents[$id];
            //Et je retourne grâce a la fonction render (enfant de AbstractController) qui renvoit la page
            //html.twig à mon navigateur
            return $this->render('agent.php.twig',[

                'agent'=>$agent
            ]);
        }






        /**
         * @Route("/agents", name="agents")
         */

        public function intervenant(){
            $agents = [
                1 => [
                    "id" => 1,
                    "lastName" => "Robert",
                    "firstName" => "David",
                    "age" => 30,
                    "published" => true
                ],
                2 => [
                    "id" => 2,
                    "lastName" => "Labaste",
                    "firstName" => "Denis",
                    "age" => 29,
                    "published" => true
                ],
                3 => [
                    "id" => 3,
                    "lastName" => "Rozand",
                    "firstName" => "Mathieu",
                    "age" => 31,
                    "published" => false
                ],
                4 => [
                    "id" => 4,
                    "lastName" => "Despert",
                    "firstName" => "Yoann",
                    "age" => 33,
                    "published" => true
                ],
                5 => [
                    "id" => 5,
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