<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecondController extends AbstractController
{
    #[Route('/second', name: 'app_second')]
    public function index(Request $req): Response
    {
        dump($req);

        $name = $req->query->get('name');
        return $this->render('second/index.html.twig', [
            'controller_name' => 'SecondController',
            'esm' => $name
        ]);
    }

    #[Route('/hello/{name}', name: 'hello')]
    public function hello($name): Response
    {
        return $this->render('second/hello.index.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/cv/{name}/{firstname}/{age}/{section}', name: 'cv')]
    public function cv($name, $firstname, $age, $section): Response
    {
return $this->render('second/cv.html.twig',[
    'name'=>$name,
    'firstname' => $firstname,
    'age'=>$age,
    'section'=>$section

]);

    }

    /**
     * @route("/helloyou",name="helloyou")
     */


    public function helloyou(): Response
    { return $this->forward('App\Controller\SecondController::hello',['name'=>'nour']);


} }