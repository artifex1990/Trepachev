<?php
    namespace App\Http\Controllers;

    class Page extends Controller
    {
        public function showOne($id)
        {
            $pages = [
                1 => 'страница 1',
                2 => 'страница 2',
                3 => 'страница 3',
                4 => 'страница 4',
                5 => 'страница 5',
            ];

            if (isset($pages[$id])) {
                return $pages[$id];
            }

            return "Страница $id не найдена!" ;
        }

        public function showAll()
        {
            return 'showAll';
        }
    }