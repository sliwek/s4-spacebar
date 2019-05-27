<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'Lubię ciastka.',
            'A ja wolę bekon!',
            'Ooooo ja też!!!'
        ];
        return $this->render('Article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }
}