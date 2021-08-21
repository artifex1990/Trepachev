<?php
    namespace Project\Controllers;

    use \Core\Controller;
    use \Project\models\Product;

    class ProductController extends Controller
    {
        public function show($params)
        {
            if ($params['id'] <= count($this->products)) {
                return $this->render('product/show', $this->products[$params['id']]);
            } else {
                echo 'Продукт не найден!<br>';
            }
        }

        public function one($params)
        {
            $product = (new Product)->getById($params['id']);

            $this->title = "Страница {$product['name']}";

            return $this->render('product/one', $product);
        }

        public function all()
        {
            $this->title = 'Список всех продуктов!';

            $products = (new Product)->getAll();
            return $this->render('product/all', ['products' => $products]);
        }
    }