<?php

namespace App\Controller;

use App\Entity\Produit;

use App\Entity\Panier;
use App\Form\PanierType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    /**
     * @Route("/", name="panier")
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $panier= new Panier();
        $produit= new Produit();


        $form = $this->createForm(PanierType::class, $panier);
        $form ->handleRequest($request);
        if($form->isSubmitted()){
            $em->persist($panier);
            $em->flush();

        }
        

        $produits= $em->getRepository(Produit::class)->findAll();
        $paniers = $em ->getRepository(Panier::class)->findall();

        return $this->render('panier/index.html.twig', [

            'panier'=>$panier,
            'paniers'=>$paniers,


            'produit'=>$produit,
            'produits'=>$produits,

            'form'=>$form->createView()
        ]);
    }

      /**
     * @Route("/delete/{id}", name="delete_produit_panier")
     */
    public function delete(Panier $panier=null)
    {
        $em= $this->getDoctrine()->getManager();
        if($panier != null){
            $em->remove($panier);
            $em->flush();
        $this->addFlash("success", "produit supprimé du panier");

        }
        return $this->redirectToRoute('panier');
    }

}
