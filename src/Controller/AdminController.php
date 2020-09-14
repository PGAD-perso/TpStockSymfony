<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {


        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }





}