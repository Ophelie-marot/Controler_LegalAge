<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


//J'étend (j'hérite) la classe de symfo AbstarctController pour pouvoir utiliser ces enfants a l'interieur de ma classe
class AgeLegalController extends AbstractController
{
        /**
         * @Route("/home", name="home")
         */
        public function home ()
        {
            return new Response("page d'accueil");
        }

        /**
         * @Route("/info", name="page_info")
         */
        public function info (Request $request)
        {
            $firstname = $request->query->get('firstname');
            $name = $request->query->get('name');



            $response = new response ('<p>bienvenue ' .$firstname .' '.$name.'</p>') ;



            return $response;
        }
        // Je crée ma route avec en plus mon 'wildard' c'est à dire une fonction existante dans symfony
        /**
         * @Route("/article/{id}", name="page_article")
         */

        public function articleShow($id)
        {
            $articles = [
                1 => 'Article 1',
                2 => "Article 2",
                3 => "Article 3",
                4 => 'Il était une fois à la Piscine.',
                5 => "Article 5",
                6 => "Article 6",
            ];
            $response = new Response ('<h1>'.$articles[$id].'</h1>');
            return $response;
        }
        // Je crée une nouvelle page pour un formulaire
        /**
         * @Route("/process-form", name="process_form")
         */
        public function processForm()
        {
            // Ceation d'une variable avec un bouleen vrai ou faux pour savoir si le formulaire a bien était remplis
            // (simulation)
            $isFormSubmitted = true ;
            // Je crée une condition dans le cas où la réponse est false
            if (!$isFormSubmitted){
                return new Response('Merci de remplir le formulaire SVP');
            } else {
            // Sinon je crée a l'aide de la fonction symfony une redirection a ma page d'accueil
                return $this->redirectToRoute("home");
            }
        }
}