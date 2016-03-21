<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Movie;
use AppBundle\Form\MovieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MovieController extends Controller
{
    /**
     * @Route("/movies/new",)
     */
    public function newAction()
    {
        $movie = new Movie();
        $form = $this->createForm(new MovieType(), $movie);
        return $this->render('movie/new.html.twig', array(
            'quote' => 'some very long text',
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/movies", name="movies_list")
     */
    public function listAction()
    {
        return new Response('TODO');
    }
}
