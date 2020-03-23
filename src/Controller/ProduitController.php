<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
use App\Entity\Panier;
use App\Form\PanierType;
use App\Form\ProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Contracts\Translation\TranslatorInterface;



class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="liste_produit")
     */
    public function index(Request $request, TranslatorInterface $translator)
    {
        $em = $this->getDoctrine()->getManager();

        $produit = new Produit();

        $form = $this -> createForm(ProduitType::class, $produit);
        $form ->handleRequest($request);
        if($form->isSubmitted()){
            $fichier=$form->get('image')->getData();
            if($fichier){
                $nomFichier = uniqid() .'.'. $fichier->guessExtension();//recup l'extension du fichier 

                try{
                    $fichier->move(
                        $this->getParameter('upload_dir'),
                        $nomFichier
                    );
                }
                catch(FileException $e){
                $this->addFlash("danger", $translator->trans('file.error'));
                return $this->redirectToRoute('home');
                }
                $produit->setImage($nomFichier);
            }
            $em->persist($produit);
            $em->flush();
        $this->addFlash("success", "produit sauvegardé");

            return $this->redirectToRoute('liste_produit');
        }

        $produits= $em->getRepository(Produit::class)->findAll();


        return $this->render('produit/index.html.twig', [
            'produit'=>$produit,
            'produits'=>$produits,
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("produit/produit/{id}", name="show_produit")
     */
    public function produit(Request $request, Produit $produit= null)
    {
        $panier = new Panier();
        $panier -> setDate( new \DateTime());
        $name = $produit -> getNom();
        $prix = $produit -> getPrix();



        $em =$this ->getDoctrine()->getManager();
        $form_edit = $this ->createForm(PanierType::class, $panier);
        $form_edit ->handleRequest($request);
        if($form_edit -> isSubmitted()){
            
            $panier ->setNom($name);
            $panier -> setPrix($prix);
            $em->persist($panier);
            $em->flush();
        $this->addFlash("success", "produit ajouté au panier");


        }

        return $this->render ('produit/produit.html.twig',[
            'produit'=>$produit,
            'form_edit'=>$form_edit->createView(),
            
        ]);


    }


    /**
     * @Route("produit/delete/{id}", name="delete_produit")
     */
    public function delete(Produit $produit=null)
    {
        $em= $this->getDoctrine()->getManager();
        if($produit != null){
            $em->remove($produit);
            $em->flush();
        $this->addFlash("success", "produit supprimé");

        }
        return $this->redirectToRoute('liste_produit');
    }


}
