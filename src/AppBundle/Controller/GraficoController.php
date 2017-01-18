<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class GraficoController extends Controller
{
    private $grafico=0;
    private $user;
    private function checkUser($session){
        
        //Prima di modificare questa parte dovremmo prima modificare il LOGIN
    }
    
    /**
     * @Route("/ghome", name="ghome")
     */
    public function homeAction(Request $request){
        
        $this->em = $this->getDoctrine()->getManager();
        $session= new session();
        $session->set('user', $request->get("User"));
        $check=$this->checkUser($session);
        
        if($check==FALSE){
           return $this->redirect($this->generateUrl('login'));
        } else
           {
            $eseguire=$this->em->getRepository("AppBundle:Grafico")->tabellaEseguire($this->em, $this->user,1);
            $lavorazione =$this->em->getRepository("AppBundle:Grafico")->tabellaLavorazione($this->em, $this->user,1);// $query2->getResult();
            $rieseguire=$this->em->getRepository("AppBundle:Grafico")->tabellaRieseguire($this->em, $this->user,1);
         
           $response=$this->render('AppBundle:Grafico:ghome.html.twig', array('arrivo' => $arrivo,'sospeso' => $sospesi, "user", $this->user));
           return $response;
        }
        
    }
    

    
            
    
}


