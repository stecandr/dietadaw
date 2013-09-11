<?php

namespace Daw\DietaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministradorController extends Controller
{
    public function indexAction()
    {
        return $this->render('DawDietaBundle:Administrador:index.html.twig');
    }
}
