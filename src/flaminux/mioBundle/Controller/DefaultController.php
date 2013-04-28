<?php

namespace flaminux\mioBundle\Controller;
use flaminux\mioBundle\Entity\DomeDevice;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello2/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity= new DomeDevice();
        $entity->setNome("Flaminio");
        $entity->setDescrizione("Questa è una bellissima descrizione");
        $em->persist($entity);
        $em->flush();
        
        //ciao!!
        return array('name' => $name);
    }
    
    
    /**
     * @Route("/funzione/")
     * @Template()
     */
    public function dammiUnNomeAction(){
        
        $em = $this->getDoctrine()->getEntityManager();
        // Return entities where 'author' matches 'dsyph3r'
       // $ritorno = $em->getRepository('flaminuxMioBundle:DomeDevice')->findBy(array('nome' => 'Flaminio'));
        $ritorno=$em->getRepository("flaminuxmioBundle:DomeDevice")->findBy(array('nome' => 'Flaminio'));
         $ritorno2=array(
            'blog'      => $ritorno,
        );
        return array('stocazzo' => $ritorno[0]->getNome());;    
        
    }
}
