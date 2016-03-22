<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Movie;
use AppBundle\Form\MovieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MovieController extends Controller
{

    /**
     * @Route("/movies/new",)
     */
    public function newAction(Request $request)
    {
        $movie = new Movie();
        $form = $this->createForm(new MovieType(), $movie);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($movie);
            $em->flush();
            $this->addFlash('sucess', 'Sam would be proud');
            return $this->redirectToRoute('movies_list');
        }
        return $this->render('movie/new.html.twig', array(
            'quote' => $this->get('quote_generator')->getRandomQuote(),
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
