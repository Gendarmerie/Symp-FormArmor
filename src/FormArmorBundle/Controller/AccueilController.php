<?php
//test
namespace FormArmorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormArmorBundle:Accueil:index.html.twig');
        //mehdi fait une midif 4
        // Modif 5
    }
}
