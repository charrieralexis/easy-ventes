<?php

namespace EasyVentes\FrontBundle\Controller;

use EasyVentes\FrontBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('EasyVentesFrontBundle:Product');
        $product = $repo->findBy(array(),array('stock' => 'desc'),1);
        $repo = $em->getRepository('EasyVentesFrontBundle:Event');
        $event = $repo->findBy(array(),array('date' => 'desc'),1);

        /*Formulaire inscription*/
        
        $client = new Client();
        
        $fb = $this->createFormBuilder($client);
        
        $fb->add('newsletter','checkbox', array(
                'label'     => 'Recevoir la newsletter',
                'required'  => false))
            ->add('firstname',null,array('label'=>'Nom','attr'=> array('placeholder'=>'Nom')))
            ->add('lastname',null,array('label'=>'Prénom','attr'=> array('placeholder'=>'Prénom')))
            ->add('email',null,array('label'=>'E-mail','attr'=> array('placeholder'=>'E-mail')))
            ->add('password','repeated',
                array(
                "type"=>"password",
                'label'=>'Mot de passe',
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'options' => array('required' => true),
                    'first_options'  => array('label' => 'Mot de passe','attr'=> array('placeholder'=>'Mot de passe')),
                    'second_options' => array('label' => 'Mot de passe (validation)','attr'=> array('placeholder'=>'Mot de passe (validation)')),
                    )
                )
           ->add('Ajouter','submit');
        
        $form = $fb->getForm();
       
        $form->handleRequest($request);
        
        
        if($request->isMethod('POST') && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $client->setUsername($form->getData()->getEmail());
            
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($client);
 
            $client->setPassword($encoder->encodePassword($form->getData()->getPassword(), $client->getSalt()));
           
            $client->setEnabled(1);
            $client->setPhone('');
            
            $em->persist($form->getData());
            $em->flush();
            return $this->redirect($this->generateUrl("easy_ventes_front_homepage"));
        }
        $product[0]->setImage(stream_get_contents($product[0]->getImage()));
        return $this->render('EasyVentesFrontBundle:Default:index.html.twig',
                array(  'product' => $product[0],
                        'event' => $event[0],
                        'form' => $form->createView())
                );
    }
    

}
