<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class DefaultController extends Controller
{
    /**
     * @Route("/caught", name="caught")
     */
    public function caught(Request $request)
    {
       try {
            $value = 5 / 0;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    /**
     * @Route("/uncaught", name="uncaught")
     */
    public function uncaught(Request $request)
    {
       // count();
         $x = null;
           $x->foo = 5; // Null field access
           //$x->bar();
        //count($foo);
    }
    /**
     * @Route("/", name="homepage")
     */
    public function show(Request $request)
    {
        // replace this example code with whatever you need
         return $this->render('demo/base.html.twig');
    }

}


