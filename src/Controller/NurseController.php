<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NurseController extends AbstractController
{
    #[Route('/nurse/login', name: 'app_nurse')]
    public function index():Response{
    {
        $nombre = "Alex";
        $pass = "12345678";
        $correcto = false;

        if($_GET["nombre"] == $nombre && $pass == $_GET["pass"]){
            $correcto = true;
            echo "Negrito";
        }else{
            echo "Blanquito";
        }
        
        return new Response($correcto, Response::HTTP_OK);
    }
}
}
