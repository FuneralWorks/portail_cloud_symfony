<?php

namespace PortailCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitsAction($abonnementId)
    {
        return $this->render('PortailCloudBundle:Default:produits/layout/produits.html.twig', array('abonnementId' => $abonnementId));
    }
}
