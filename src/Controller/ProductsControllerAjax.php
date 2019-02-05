<?php
/**
 * Created by PhpStorm.
 * User: Plotua
 * Date: 03.02.2019
 * Time: 20:23
 */

namespace App\Controller;

use App\Entity\Products;
use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/productsajax")
 */

class ProductsControllerAjax extends AbstractController
{
    /**
     * @Route("/", name="productsajax_index", methods={"GET"})
     */
    public function index(ProductsRepository $productsRepository): Response
    {
        echo ("123");
        return $this->render('productsajax/index.html.twig', [
            'products' => $productsRepository->findAll(),
        ]);
    }
}