<?php

namespace PortailCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LicencesController extends Controller
{
    public function licencesAction($abonnementId, $produitId)
    {
        return $this->render('PortailCloudBundle:Default:licences/layout/licences.html.twig', array('abonnementId' => $abonnementId,
                                                                                                    'produitId' => $produitId));
    }
}
