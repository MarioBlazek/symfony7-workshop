<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class WelcomeController extends AbstractController
{
    #[Route('/', name: 'app_welcome')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        return $this->render('welcome/index.html.twig');
    }
}
