<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class PrinkinoController extends Controller
{
    private $prink=0;
    private $user;
    private function checkUser($session){
        $this->user= $session->get('user');
        if($this->user==NULL){
            return FALSE;
        }else {
           $temp=$this->em->getRepository("AppBundle:Prinkino")->checkUsername($this->em, $this->user);
           return $temp; 
        }
    }
    
    /**
     * @Route("/home", name="home")
     */
    public function homeAction(Request $request)
    {
        $this->em = $this->getDoctrine()->getManager();
        $session= new session();
        $session->set('user', $request->get("User"));
        $check=$this->checkUser($session);
       if($check==FALSE){
           return $this->redirect($this->generateUrl('login'));
        } else
           {
            $arrivo=$this->em->getRepository("AppBundle:Prinkino")->tabellaArrivi($this->em, $this->user,6);
            $sospesi =$this->em->getRepository("AppBundle:Prinkino")->tabellaSospesi($this->em, $this->user,6);// $query2->getResult();
            $response=$this->render('AppBundle:Prinkino:home.html.twig', array('arrivo' => $arrivo,'sospeso' => $sospesi, "user", $this->user));
            return $response;
        }
    }
    

    /**
     * @Route("/cliente/{idcliente}", name="cliente")
     */
    public function clienteAction(Request $request)
    {
        $this->em = $this->getDoctrine()->getManager();
        $idcliente= $request->get('idcliente');
        $cliente=$this->em->getRepository("AppBundle:Cliente")->RicercaClienteById($this->em,$idcliente);
        $ordini=$this->em->getRepository("AppBundle:Ordine")->RicercaOrdiniByCliente($this->em,$idcliente);
 
        return $this->render('AppBundle:Prinkino:cliente.html.twig', array("clienti" => $cliente, "ordini" => $ordini, "idcliente" => $idcliente) );//, "ordini" => $ordini  ));
    }

    /**
     * @Route("/ordine{idordine}", name="ordine")
     */
    public function ordineAction(Request $request)
    {
        $this->em = $this->getDoctrine()->getManager();
        $idordine= $request->get('idordine');
        $ordine=$this->em->getRepository("AppBundle:Ordine")->DatiOrdineById($this->em,$idordine);
        $eventi=$this->em->getRepository("AppBundle:Ordine")->EventiOrdineById($this->em,$idordine);
        return $this->render('AppBundle:Prinkino:ordine.html.twig', array( "ordine" => $ordine, "eventi" => $eventi ));
    }
    
    /**
     * @Route("/nuovocliente", name="nuovocliente")
     */
    public function ncAction(Request $request)
    {
        $session= new session();
        $session->set('precedente',$request->getRequestUri ());
        $this->em = $this->getDoctrine()->getManager();    
        $check=$this->checkUser($session);
        if($check==FALSE){
           return $this->redirect($this->generateUrl('login'));
       } else
           {
         return $this->render('AppBundle:Prinkino:nuovocliente.html.twig', array(
            // ...
        ));
        }
       
    }
    
    
            /**
     * @Route("/riepilogo", name="riepilogo")
     */
    public function riepilogoAction(Request $request)
    {   $session = new session();
    $em=$this->getDoctrine()->getManager();
        if($session->get('precedente')=="/nuovocliente"){
            $dati[]="nome";
            $dati[]="cognome";
            $dati[]="data_nascita";
            $dati[]="codice_fiscale";
            $dati[]="telefono";
            $dati[]="via";
            $dati[]="numero";
            $dati[]="citta";
            $dati[]="cap";
            $dati[]="username";
            $dati[]="mail";
            $dati[]="note";
            $dati[]="fax";
            
            foreach ($dati as $x){
                $riepilogo[]=array("tipo" => $x,"contenuto" => $request->get($x));
                $session->set($x,$request->get($x));
            }
        }elseif($session->get('precedente')=="/nuovoordine"){
            $unOrdine=$session->get('unOrdine');
            $riepilogo= $this->getDoctrine()->getManager()->getRepository("AppBundle:Ordine")->RiepilogoOrdine($unOrdine,$em);
        }elseif($session->get('precedente')=="/visualizza")
        {
            $riepilogo=$request->get("riepilogo");
        }
        return $this->render('AppBundle:Prinkino:riepilogo.html.twig',array("riepilogo" =>$riepilogo, "precedente"=>$session->get('precedente')));
    }
    
         /**
     * @Route("/conferma", name="conferma")
     */
    public function confermaAction(Request $request)
    {
        $session = new session();
        $em= $this->getDoctrine()->getManager();
        if($session->get('precedente')=="/nuovocliente"){ //conferma deve ricevere l'array già pronto così il metodo fa cagare
            
            $cliente=$em->getRepository("AppBundle:Cliente")->creaCliente($session);
            $em->persist($cliente);
            $em->flush();
            
            $query = $em->createQuery(
                'SELECT c.id
                FROM AppBundle:Cliente c
                WHERE c.username = :user'
            )->setParameter('user', $cliente->getUsername());
            $id=$query->getSingleScalarResult();
            
            $riepilogo[]=array("tipo" => "codice" ,"contenuto" => $id);
            $riepilogo[]=array("tipo" => "username" ,"contenuto" => $cliente->getUsername());
            $riepilogo[]=array("tipo" => "password","contenuto" => $cliente->getPassword());
            }elseif($session->get('precedente')=="/nuovoordine"){
            $unOrdine=$session->get('unOrdine');
            $this->getDoctrine()->getManager()->getRepository("AppBundle:Ordine")->CreaOrdine($em,$unOrdine);
            $riepilogo=$this->getDoctrine()->getManager()->getRepository("AppBundle:Ordine")->RiepilogoOrdine($unOrdine,$em);
        }
        $temp=$session->get('user');
        $session->clear();
        $session->set('user',$temp);
        return $this->render('AppBundle:Prinkino:conferma.html.twig', array( "riepilogo" =>$riepilogo ));
    }
    
     /**
     * @Route("/clienti", name="clienti")
     */
    public function clientiAction(Request $request)
    {
        $session= new session();
        //$check=$this->checkUser($session); //finire controllo user
        $em= $this->getDoctrine()->getManager();
        $str="%";
        if($request->get("criterio")!=NULL){
            $str=$request->get("criterio").$str;
        }
        $clienti=$em->getRepository("AppBundle:Cliente")->RicercaFulltext($em,$str);
        return $this->render('AppBundle:Prinkino:clienti.html.twig', array("clienti"=>$clienti));
    }
    
    
        /**
     * @Route("/nuovoordine", name="nuovoordine")
     */
    public function nordineAction(Request $request)
    {
        $session= new session();
        $ordine=$session->get('ordine');
        $dato=$this->getDoctrine()->getManager()->getRepository("AppBundle:Ordine")->DatoRequest($request);
        if($dato!=null){
            $ordine[$dato['tipo']]=$dato['dato'];
            $session->set('ordine',$ordine);
        }
        $check=$this->getDoctrine()->getManager()->getRepository("AppBundle:Ordine")->CheckOrdine($ordine);
        if($check=="completo"){
            $ordine=$this->getDoctrine()->getManager()->getRepository("AppBundle:Ordine")->OrdineDaSessione($this->getDoctrine()->getManager(), $session);
            $session->set('precedente','/nuovoordine');
            $session->set('unOrdine',$ordine);
             return $this->redirect($this->generateUrl('riepilogo'));
        }elseif ($check=="idcliente") {
            return $this->redirect($this->generateUrl('clienti'));
        }elseif($check=="idarticolo"){
            return $this->redirect($this->generateUrl('catalogo'));
        } elseif($check=="bozza") {
            return $this->redirect($this->generateUrl('bozza'));
        }elseif($check=="quantita" or $check="commento"){
            return $this->render('AppBundle:Prinkino:inserimento.html.twig', array("dettaglio"=>$check));
        }
        
    }
    
    /**
     * @Route("/catalogo", name="catalogo")
     */
    public function catalogoAction(Request $request)
    {
        $session= new session();
        //$check=$this->checkUser($session); //finire controllo user
        $em= $this->getDoctrine()->getManager();
        $padre=1;
        if($request->get("idCategoria")!=NULL){
            $padre=$request->get("idCategoria");
        }
        $catalogo=$em->getRepository("AppBundle:Categoria")->RicercaSottoCategorie($em,$padre);
        if($catalogo==0){
            return $this->redirect($this->generateUrl('articolo',array("idproducibile"=>$padre,"precedente"=>0,"pval"=>0)));
        }
        return $this->render('AppBundle:Prinkino:catalogo.html.twig', array("catalogo" =>$catalogo  ));
    }
    
    /**
     * @Route("/ordini", name="ordini")
     */
    public function ordiniAction(Request $request)
    {
        $session= new session();
        //$check=$this->checkUser($session); //finire controllo user
        $em= $this->getDoctrine()->getManager();
        $str="%";
        if($request->get("criterio")!=NULL){
            $str=$request->get("criterio").$str;
        }
        $ordini=$em->getRepository("AppBundle:Ordine")->RicercaOrdini($em,$str);
        return $this->render('AppBundle:Prinkino:ordini.html.twig', array("ordini"=>$ordini));
    }

    /**
     * @Route("/immagine/{idgrafica}/{idcliente}", name="immagine")
     */
    public function immagineAction(Request $request)
    {   
        $this->em = $this->getDoctrine()->getManager();
        $idcliente= $request->get('idcliente');
        $idgrafica= $request->get('idgrafica');
        if($idgrafica==0){
            return $this->redirect($this->generateUrl('cliente',array('idcliente' => $idcliente)));
        }else{
            $grafica= $this->em->getRepository('AppBundle:Grafica')->findOneById($idgrafica);
            return $this->render('AppBundle:Prinkino:grafica.html.twig', array("id" => $grafica->getId(),"file" => $grafica->getFile(), "idcliente" =>$idcliente ));
        }
        
    }
    
          /**
     * @Route("/articolo/{idproducibile}/{precedente}", name="articolo")
     */
    
    public function articoloAction(Request $request){
       $this->em = $this->getDoctrine()->getManager();
       $idproducibile= $request->get('idproducibile'); 
       $precedente= $request->get('precedente');
       $session=new session();
       if($precedente==0){
           $valorip=array();
       } elseif($precedente==1) {
           $valorip[0]=$request->get('pval');
       }else {
           $valorip=$session->get('valori');
           $valorip[]=$request->get('pval');
       }
        $session->set('valori',$valorip);
        $precedente++;   
        $attributo= $this->em->getRepository('AppBundle:Articolo')->RicercaAttributiArticoliProducibiliByValori($this->em,$idproducibile, $valorip );
        if(count($attributo)==0){
            $articolo=$this->em->getRepository('AppBundle:Articolo')->ArticoliProducibiliByValori($this->em, $valorip );
            $conferma=$this->em->getRepository('AppBundle:Articolo')->ConfermaArticolo($articolo);
            return $this->render('AppBundle:Prinkino:riepilogoProdotto.html.twig', array("riepilogo"=>$conferma,"idproducibile"=>$idproducibile,"idarticolo"=>$articolo[0]['id']));
        }
        $valori= $this->em->getRepository('AppBundle:Valore')->RicercaValoriByAttributo($this->em,$attributo[0]['idattributo']);
        return $this->render('AppBundle:Prinkino:prodotto.html.twig', array("attributo"=>$attributo[0],"valori"=>$valori,"precedente"=>$precedente,"idproducibile"=>$idproducibile));
       }
       
    
       /**
     * @Route("/articolo/{idarticolo}/{idcliente}/", name="articolo2")
     */
    
    public function articolo2Action(Request $request){
        $articolo=$request->get('idarticolo');
        $conferma=$this->em->getRepository('AppBundle:Articolo')->ConfermaArticolo($articolo);
        return $this->render('AppBundle:Prinkino:riepilogoProdotto.html.twig', array("riepilogo"=>$conferma,"idproducibile"=>"","idarticolo"=>$articolo[0]['id']));
    }
    
    /**
     * @Route("/bozza/", name="bozza")
     */
    public function bozzaAction(){
        return $this->render('AppBundle:Prinkino:Bozza.html.twig');
    }
    
    /**
     * @Route("/annulla", name="annulla")
     */
    public function annullaAction(){
        $session= new session();
        $temp=$session->get('user');
        $session->clear();
        $session->set('user',$temp);
        return $this->redirect($this->generateUrl('home'));
    }
    /**
     * @Route("/sospendi", name="sospendi")
     */
    public function sospendiAction(){
        $session= new session();
        $this->em=$this->getDoctrine()->getManager();
        if(count($session->get('ordine'))==5){
            return $this->redirect($this->generateUrl('nuovoordine')); 
        }else{
          $this->em->getRepository("AppBundle:Ordine")->sospendiOrdine($this->em,$session);
         return $this->redirect($this->generateUrl('annulla')); //elimino la sessione
        } 
    }
    
    /**
     * @Route("/visualizza", name="visualizza")
     */
    public function visualizzaAction(Request $request){
        $this->em=$this->getDoctrine()->getManager();
        $session= new session();
        $session->set('precedente',"/visualizza");
        if($request->get('idsospeso')){
            $unOrdine= $this->em->getRepository("AppBundle:Ordine")->findOneById($request->get("idsospeso"));
            $session->set("ordine", $this->em->getRepository("AppBundle:Ordine")->OrdineSospesoToSessione($unOrdine));
            $riepilogo=$this->em->getRepository("AppBundle:Ordine")->RiepilogoOrdine($unOrdine,$this->em);
        }else{
            $riepilogo=$this->getDoctrine()->getManager()->getRepository("AppBundle:Ordine")->RiepilogoOrdineSospeso($session->get('ordine'),$this->em);   
        }
        return $this->redirect($this->generateUrl('riepilogo',array("riepilogo" => $riepilogo)));
    }
}