<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{

    public array $products = [
        [
          'id' => 1,
          'name' => 'Iphone 13',
          'price' => 999.99,
          'description' => 'Apple iPhone 13 Pro 256 Go Bleu Pacifique',
          'category' => 'smartphone',
        ],
        [
          'id' => 2,
          'name' => 'Samsung Galaxy S21',
          'price' => 899.99,
          'description' => 'Samsung Galaxy S21 5G 128 Go Double SIM Noir Phantom',
          'category' => 'smartphone',
        ],
        [
          'id' => 3,
          'name' => 'Huawei P40',
          'price' => 799.99,
          'description' => 'Huawei P40 Pro 5G 256 Go Double SIM Noir',
          'category' => 'smartphone',
        ],
        [
          'id' => 4,
          'name' => 'MacBook Pro',
          'price' => 1299.99,
          'description' => 'Apple MacBook Pro 13" 256 Go SSD 8 Go RAM Intel Core i5 quadricœur à 1,4 GHz Argent',
          'category' => 'laptop',
        ]
    ];

    #[Route('/products', name: 'products')]
    public function products(): JsonResponse
    {
        $filteredArray = $this->products;
        return new JsonResponse($filteredArray);
    }

    #[Route('/products/{id}', name: 'product')]
    public function product(int $id = 0): JsonResponse
    {
        
        if ($id){
            $product = array_filter($this->products, function ($var) use ($id) {
                return ($var['id'] == $id);
            });
            return new JsonResponse (current($product));
        }
    }
}
