<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultaaaaController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        return $this->render('default/index.html.twig',
            [
                'title' => 'sample title'
            ]
        );
    }

    public function testSniffer()
    {
        $arraay = [
            'sample1' => 'val1ss',
            'sample2' => 'val2z',
            'sample3' => 'val3'
        ];
    }
}
