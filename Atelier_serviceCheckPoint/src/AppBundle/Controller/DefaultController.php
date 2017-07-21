<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Panier;
use AppBundle\Form\PanierType;
use AppBundle\Services\CalculateurService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")$panier
     */
    public function indexAction(Request $request, CalculateurService $calculateurService)
    {
        $panier = new Panier();
        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $result = $calculateurService->calcul($panier);
            return $this->render('@App/index.html.twig', array(
                'form' => $form->createView(),
                'result' => $result
            ));


        }

        return $this->render('@App/index.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
