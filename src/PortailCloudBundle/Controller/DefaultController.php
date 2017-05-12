<?php

namespace PortailCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function dashboardAction()
    {
        return $this->render('PortailCloudBundle:Default:dashboard/dashboard.html.twig');
    }

    public function abonnementsAction()
    {
        return $this->render('PortailCloudBundle:Default:abonnements/layout/abonnements.html.twig');
    }

}
