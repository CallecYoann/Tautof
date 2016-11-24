<?php

namespace tautof\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller {

    public function findAllAction() {
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('tautofPlatformBundle:Marque');

        $Marques = $repository->findAll();
        
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('tautofPlatformBundle:Annonce');

        $Annonces = $repository->findAll();


        return $this->render('tautofPlatformBundle:Default:SearchForm.html.twig', array('Marques' => $Marques, 'marque' => -1, 'Annonces' => $Annonces));
    }

    public function testAction(Request $request) {
        $id = $request->get('marque');

        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('tautofPlatformBundle:Marque');

        $Marque = $repository->findOneBy(array('id' => $id));


        return $this->render('tautofPlatformBundle:Default:result.html.twig', array('Marque' => $Marque));
    }

    public function resultAction(Request $request) { // Argument Request qui permet de récupérer des données de L'URL
        $sortby = $request->get('sortby');
        if (empty($sortby)) { $sortby = 'id'; }
        
        $orderby = $request->get('orderby');
         if (empty($orderby)) { $orderby = 'DESC'; }
         
         
        $id = $request->get('marque'); //On récupère dans l'URL 'marque'  qui est dans le formulaire SearchForm.html.twig.
      
        $em = $this->getDoctrine() //On appelle doctrine qui extrait les propriétés de la base de donnée.
                           ->getManager();//
        
        $repo = $em->getRepository('tautofPlatformBundle:Annonce'); //On va chercher l'entité Annonce. 
        
        if ($id > -1) { //Si l'Id est valide :
            $qb = $repo->createQueryBuilder('a') 
                    ->join('a.modele', 'mo')
                    ->join('mo.marque', 'ma')
                    ->where('ma.id = :marque')
                    ->setParameter('marque', $id);
        
          
        } else { //Si l'Id n'est pas valide : 
           
            $qb = $repo->createQueryBuilder('a');
        }
          $Annonces = $qb->orderBy('a.'.$sortby, $orderby)->getQuery()->getResult(); //Renvoi des annonces filtrées.
        
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('tautofPlatformBundle:Marque');
               

        $Marques = $repository->findAll();

        return $this->render('tautofPlatformBundle:Default:SearchForm.html.twig', array('Annonces' => $Annonces, 'marque' => $id, 'Marques' => $Marques)); //On envoie le résultat de la f° à la vue + envoi des variables à la vue.
    }
    
    
}
