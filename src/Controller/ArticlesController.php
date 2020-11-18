<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ArticlesController extends AbstractController
    {
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

            //Je stocke dans une variable l'appel de l'article par son id dans l'url
         $article = $articles[$id];
         
            //J'utilise la fontion render, enfant de abstractController pour lier mon fichier html.twig
         return $this->render('article.html.twig', [
             'article' => $article
         ]);

        }
    }