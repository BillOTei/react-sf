<?php

namespace AppBundle\Controller;

use AppBundle\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle::index.html.twig');
    }

    public function getUsersAction()
    {
        /**
         * @var UserRepository $userRepo
         */
        $userRepo = $this->container->get("doctrine.service")->entityManager->getRepository('AppBundle\Entity\User');

        return new Response($this->get('serializer')->serialize($userRepo->getAllOrderedByLastname(), 'json'));
    }
}
