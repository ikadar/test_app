<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Test extends AbstractController
{
    /**
     * @Route("/test1", methods={"GET"})
     */
    public function test1() : JsonResponse
    {
        $info = "TEST01";

        dump($info);
        die();

        return new JsonResponse(
            $info,
            JsonResponse::HTTP_OK
        );
    }

    /**
     * @Route("/test2", methods={"GET"})
     */
    public function test2() : JsonResponse
    {
        $info = "TEST02!!!";

        dump($info);
        die();

        return new JsonResponse(
            $info,
            JsonResponse::HTTP_OK
        );
    }

}
