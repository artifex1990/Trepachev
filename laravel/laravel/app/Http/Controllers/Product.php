<?php
    namespace App\Http\Controllers;

    class Product extends Controller
    {
        private $categories;

        public function __construct()
        {
            $this->categories = [
                1 => [
                    'name' => 'Категория 1',
                    'products' => [
                        1 => [
                            'name'    => 'Продукт 1',
                            'cost'    => '300',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 1'
                        ],
                        2 => [
                            'name'    => 'Продукт 2',
                            'cost'    => '400',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 2'
                        ],
                        3 => [
                            'name'    => 'Продукт 3',
                            'cost'    => '500',
                            'inStock' => false,
                            'desc'    => 'Описание продукта 3'
                        ],
                    ],
                ],
                2 => [
                    'name' => 'Категория 2',
                    'products' => [
                        1 => [
                            'name'    => 'Продукт 1',
                            'cost'    => '700',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 1'
                        ],
                        2 => [
                            'name'    => 'Продукт 2',
                            'cost'    => '800',
                            'inStock' => false,
                            'desc'    => 'Описание продукта 2'
                        ],
                        3 => [
                            'name'    => 'Продукт 3',
                            'cost'    => '900',
                            'inStock' => false,
                            'desc'    => 'Описание продукта 3'
                        ],
                    ],
                ],
            ];
        }

        public function showProduct($categoryId, $productId)
        {
            if (!isset($this->categories[$categoryId])) {
                return view('product.error', ['error' => "Извините, категория с id $categoryId не найдена!"]);
            }

            if (!isset($this->categories[$categoryId]['products'][$productId])) {
                return view('product.error', ['error' => "Извините, продукт с id $productId не найден!"]);
            }

            return view('product.showProduct', [
                'categoryInfo' => [
                    'id'   => $categoryId,
                    'name' => $this->categories[$categoryId]['name']
                ], 
                'product'  => $this->categories[$categoryId]['products'][$productId]
            ]);
        }

        public function showCategory($categoryId)
        {
            if (!isset($this->categories[$categoryId])) {
                return view('product.error', ['error' => "Извините, категория с id $categoryId не найдена!"]);
            }

            return view('product.showCategory', [
                'categoryId' => $categoryId,
                'title'      => "Список продуктов категории $categoryId",
                'products'   => $this->categories[$categoryId]['products']
            ]);
        }

        public function showCategoryList()
        {
            return view('product.showCategoryList', [
                'title'      => "Список категорий",
                'categories'   => $this->categories
            ]);
        }
    }