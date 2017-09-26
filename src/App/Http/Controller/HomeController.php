<?php


namespace App\Http\Controller;


use Mawman\Seed\Http\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{

    /**
     * @Route("/")
     */
    public function index() {
        $this->render("index.twig");
    }

}