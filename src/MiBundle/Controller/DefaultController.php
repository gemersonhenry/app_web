<?php

namespace MiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$productos = array(
    			array( "producto" => "Prod. #1", "precio" => 2 ),
    			array( "producto" => "Prod. #2", "precio" => 6 ),
    			array( "producto" => "Prod. #3", "precio" => 4 ),
    			array( "producto" => "Prod. #4", "precio" => 5 ),
    			array( "producto" => "Prod. #5", "precio" => 9 ),
    		);

        return $this->render('MiBundle:Default:index.html.twig',
        	array(
        		'title' => "TÍTULO DE MI APLICACIÓN",
        		'productos' => $productos
        	)
        );
    }
}
