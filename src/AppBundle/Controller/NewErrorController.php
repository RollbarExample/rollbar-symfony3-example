<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class NewErrorController extends Controller
{
    /**
     * @Route("/error_result")
     */
    public function indexAction(Request $request)
    {
		try {
            $value->raj =0;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}


