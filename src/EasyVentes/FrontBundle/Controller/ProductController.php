<?php

namespace EasyVentes\FrontBundle\Controller;

use EasyVentes\FrontBundle\Entity\Alert;
use EasyVentes\FrontBundle\Entity\Client;
use EasyVentes\FrontBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    private $event;
    protected $id;
    
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $repo = $em->getRepository('EasyVentesFrontBundle:Product');
        $products = $repo->findAll();
        //dump($products);exit;
        $client = new Client();
        $produc = new Product();
        
        foreach ($products as $product) {
            
            $product->setImage(stream_get_contents($product->getImage()));
            
            $product->alert = $em->getRepository('EasyVentesFrontBundle:Alert')->findOneBy(array('product'=>$product->getId()));
        }
        
        //dump($products);exit;
        
        return $this->render('EasyVentesFrontBundle:Product:list.html.twig', array('products' => $products));
    }
    
    public function detailAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('EasyVentesFrontBundle:Product');
        $product = $repo->find($id);
        
        $product->setImage(stream_get_contents($product->getImage()));
        $product->alert = $em->getRepository('EasyVentesFrontBundle:Alert')->findOneBy(array('product'=>$product->getId()));
        return $this->render('EasyVentesFrontBundle:Product:detail.html.twig', array('product'=>$product));
    }
    
    public function alertAction(Request $request) {
        
        $request = Request::createFromGlobals();
        
        $em = $this->getDoctrine()->getManager();
        
        $user = (string) $request->query->get('user_id');
        $product = (string) $request->query->get('product_id');
        
        $alert = new Alert();
        
        $fb = $this->createFormBuilder($alert);
        $form = $fb->getForm();
        $form->handleRequest($request);
        
        $client_obj = $em->getRepository('EasyVentesFrontBundle:Client')->find($user);
        $product_obj = $em->getRepository('EasyVentesFrontBundle:Product')->find($product);
        
        //var_dump($client_obj,$product_obj);exit;
        
        $alert->setClient($client_obj);
        $alert->setProduct($product_obj);
        
        $em->persist($form->getData());
        $em->flush();
        echo"success";
        exit;
    }
    
    public function produitPhare ()
    {
        $conn = $this->get('database_connection');
        $events = $conn->fetchAll('SELECT * FROM event where event.date < NOW() order by date desc  limit  3 ');
        $idevents = $events[0]['id'] . ',' .  $events[1]['id'] . ',' .  $events[2]['id']  ;
        
        $products = $conn->fetchAll('select product_id from sale where event_id in ('.$idevents.') group by product_id order by sum(nb_sales) desc  limit  10 ');
        $result = array();
        foreach ($products as $product) {
            array_push($result,$this->getDoctrine()->getManager()->getRepository('EasyVentesFrontBundle:Product')->find($product['product_id']));
        }
        
        return $result;
    } 
}