<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class firstController extends AbstractController
{
    /**
     * @route("",name="home")
     */
    public function index(){

        return $this->redirectToRoute('first');
    }



    /**
     * @route("/first",name="first")
     */


    public function first(): Response
    {
        return new Response("<h1> Hello forme </h1>");

    }


}
