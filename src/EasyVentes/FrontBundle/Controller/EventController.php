<?php

namespace EasyVentes\FrontBundle\Controller;

use EasyVentes\FrontBundle\Entity\Inscription;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use EasyVentes\FrontBundle\Entity\Client;
use EasyVentes\FrontBundle\Entity\Event;
use EasyVentes\FrontBundle\Entity\Product;

class EventController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('EasyVentesFrontBundle:Event');
        $events = $repo->findAll();
        return $this->render('EasyVentesFrontBundle:Event:list.html.twig', array('events' => $events));
    }
    
    public function detailAction($id,Request $request) {
        
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('EasyVentesFrontBundle:Event');
        $event = $repo->find($id);
    
        $inscription = new Inscription();
        
        $fb = $this->createFormBuilder($inscription);
        $form = $fb->getForm();
        $form->handleRequest($request);
        
        
        if($request->isMethod('POST') == true)
        {
            $form2 = $request->get('form');
            $user = (string) $form2['user'];
            $event = (string) $form2['event'];
            
            $client_obj = $em->getRepository('EasyVentesFrontBundle:Client')->find($user);
            $event_obj = $em->getRepository('EasyVentesFrontBundle:Event')->find($event);
            
            //var_dump($client_obj,$event_obj);exit;
            
            $inscription->setStatus('interessé');
            $inscription->setClient($client_obj);
            $inscription->setEvent($event_obj);
            
            $em->persist($form->getData());
            $em->flush();
            return $this->redirect($this->generateUrl("easy_ventes_front_event"));
        }
        $event->inscription = $em->getRepository('EasyVentesFrontBundle:Inscription')->findOneBy(array('event'=>$event->getId()));
        //var_dump($event);exit;
        
        return $this->render('EasyVentesFrontBundle:Event:detail.html.twig', 
        array(  
                'event'=>$event
            ));
    }
    
}
