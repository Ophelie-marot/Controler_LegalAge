<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AgeLegalController
{

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
        /**
         * @Route("/article", name="page_article")
         */
        public function articleShow (Request $request)
        {
            $idArticle = $request->query->get('id');
            $articles =[
                1 => 'Article 1',
                2 => "Article 2",
                3 => "Article 3",
                4 => 'Il était une fois à la Piscine.',
                5 => "Article 5",
                6 => "Article 6",
            ];
            $response = new Response ('<h1>'.$articles[$idArticle].'</h1>');
            return $response;
        }

}