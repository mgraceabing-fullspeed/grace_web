<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        /*return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DefaultController.php',
        ]);*/

        return $this->render(
            'default/index.html.twig',
            [
                'title' => 'sample title'
            ]
        );
    }

    public function test_sniffer()
    {
        $arraay = [
            'sample1' => 'val1ss',
            'sample2' => 'val2z',
            'sample3' => 'val3'
        ];
    }
}
