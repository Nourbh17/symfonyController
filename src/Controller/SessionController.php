<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    #[Route('/session', name: 'app_session')]
    public function index(sessionInterface $session): Response
    {
        if(!($session->has('user'))) {
            $message = "Bienvenue chez nous";
            $this->addFlash('welcome', $message);
            $session->set('user','newuser');
        }
        return $this->render('session/index.html.twig', [
            'controller_name' => 'SessionController',
        ]);
    }
}
