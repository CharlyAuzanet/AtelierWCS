<?php

namespace AppBundle\Services;

use AppBundle\Entity\Panier;

/**
 * Class CalculateurService
 * @package AppBundle\Services
 */
class CalculateurService
{
    public function calcul(Panier $panier): array
    {
        $htTotal = $panier->getQuantite() * $panier->getPrix();
        $ttcTotal = $panier->getTVA() / 100 * $htTotal + $htTotal;

        $result = array(
            'tva' => $ttcTotal,
            'ht' => $htTotal,
            'nom' => $panier->getNom()
        );
        return $result;
    }
}