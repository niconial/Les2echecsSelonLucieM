<?php

namespace LFV\Les2echecsSelonLucieMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccueilController extends Controller //si erreur, penser à changer le nom de la classe du contrôleur
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function indexAction()
    {
        return $this->render('@LFVLes2echecsSelonLucieM/Accueil/accueil.html.twig');
    }
}
