<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    public function welcomeAction()
    {
        return $this->render('@App/Dashboard/welcome.html.twig');
    }
}
