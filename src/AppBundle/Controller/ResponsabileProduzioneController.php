<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class ResponsabileProduzioneController extends Controller
{
    /**
     * @Route("/SP/home", name="SPhome")
     */
    public function homeAction (Request $request)
    {
        $session= new session();
        $em=$this->getDoctrine()->getManager();
        if(!($session->get('user')))
        {
            if($request->get('User'))
            {
                $session->set('user',$request->get('User'));
                $idRP=$em->getRepository("AppBundle:Operatore")->findOneBy(array("username"=>$request->get('User'),"tipo"=>"Responsabile"));
                $session->set('idRP',$idRP->getId());
            }else
            {
                return $this->redirect($this->generateUrl('login'));
            }
        }
        $eseguire=$em->getRepository("AppBundle:Ordine")->daEseguire($em,$session->get('idRP'));
        $produzione=$em->getRepository("AppBundle:Ordine")->inProduzione($em,$session->get('idRP'));
        return $this->render('AppBundle:ResponsabileProduzione:home.html.twig', array("eseguire"=>$eseguire,"produzione"=>$produzione));
    }

    /**
     * @Route("/SP/operatori", name="SPoperatori")
     */
    public function operatoriAction()
    {
        return $this->render('AppBundle:ResponsabileProduzione:operatori.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/SP/daeseguire", name="SPdaeseguire")
     */
    public function daeseguireAction()
    {
        return $this->render('AppBundle:ResponsabileProduzione:daeseguire.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/SP/inProduzione", name="SPinproduzione")
     */
    public function inProduzioneAction()
    {
        return $this->render('AppBundle:ResponsabileProduzione:in_produzione.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/SP/conclusi", name="SPconclusi")
     */
    public function conclusiAction()
    {
        return $this->render('AppBundle:ResponsabileProduzione:conclusi.html.twig', array(
            // ...
        ));
    }

}
