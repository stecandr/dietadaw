<?php

namespace Daw\DietaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {	
		$em = $this->getDoctrine()->getEntityManager();
		$articulos = $em->getRepository('DawDietaBundle:Articulo')->findAll();
		return $this->render('DawDietaBundle:Default:index.html.twig',
		array('articulos' => $articulos));
    }
	
	public function quecomerAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$articulos = $em->getRepository('DawDietaBundle:Articulo')->findAll();
		return $this->render('DawDietaBundle:Default:quecomer.html.twig',
		array('articulos' => $articulos));
    }

	public function quebeberAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$articulos = $em->getRepository('DawDietaBundle:Articulo')->findAll();
        return $this->render('DawDietaBundle:Default:quebeber.html.twig',
		array('articulos' => $articulos));
    }
	
	public function recetasAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$recetas = $em->getRepository('DawDietaBundle:Receta')->findAll();
        return $this->render('DawDietaBundle:Default:recetas.html.twig',
		array('recetas' => $recetas));
    }

	public function calendarioAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		$recetas = $em->getRepository('DawDietaBundle:Receta')->findAll();
        return $this->render('DawDietaBundle:Default:calendario.html.twig',
		array('recetas' => $recetas));
	}

	public function listarAction()
	{
		
	}
}
