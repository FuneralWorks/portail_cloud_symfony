<?php

namespace PortailCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PortailCloudBundle\Entity\Subscriptions;
use PortailCloudBundle\Entity\licences;
use PortailCloudBundle\Entity\Products;

use PortailCloudBundle\Form\testType;


class TestController extends Controller
{

    public function testFormulaireAction(){
        
        $form = $this->createForm(new testType());

        if($this->get('request')->getMethod() ==  'POST'){

            $form->bind($this->get('request'));
            // var_dump($form->getData()); tout le formulaire
            // echo $form['email']->getData();

            $form = $this->createForm(new testType(), array('email' => 'nathan.calvarin@gmail.com'));   
        }



        return $this->render('PortailCloudBundle:Default:test.html.twig', array('form'=> $form->createView()));
        
    }














    // public function ajoutAction()
    // {

    //     $em = $this->getDoctrine()->getManager();

    //     // $licences = new licences();
    //     // $licences->setSku('1134620');
    //     // $licences->setDesignation('Licence de type puissante et solide');
    //     // $licences->setQuantity('5');

    //     // $em->persist($licences);
    //     // $em->flush();

    //     $licences = $em->getRepository('PortailCloudBundle:licences')->findAll();

    //     return $this->render('PortailCloudBundle:Default:test.html.twig', array('licences' => $licences));
    // }
}