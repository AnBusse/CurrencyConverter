<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function indexAction(){
        return $this->render('homepage.html.twig');
    }
}