<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PruebasController extends Controller
{
    public function indexAction(Request $request, $name, $age)
    {
        //return $this->redirect( $this->generateUrl("homepage") );
        //return $this->redirect( $this->generateUrl("helloWorld") );
        
        //$nuevaRuta = $this->container->get("router")->getContext()->getBaseUrl()."/hello-world";
        //return $this->redirect( $nuevaRuta );
        
        //return $this->redirect( $request->getBaseUrl()."/hello-world" );

        return $this->render( 'AppBundle:Pruebas:index.html.twig',
            array(
                'texto' => "Mensaje desde la action del controller - Name: $name, Age: $age"
            )
        );
    }

}
