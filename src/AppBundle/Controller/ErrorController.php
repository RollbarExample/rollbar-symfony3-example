<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Config\Definition\Exception\Exception;


class ErrorController extends Controller
{
    /**
     * @Route("/result")
     */
    public function indexAction(Request $request)
    {
       try {
            $value = 5 / 0;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}


