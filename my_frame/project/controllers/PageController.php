<?php
    namespace Project\Controllers;

    use \Core\Controller;
    use \Project\Models\Page;

    class PageController extends Controller
    {
        public function one($params)
        {
            $page = (new Page) -> getById($params['id']);
            
            $this->title = $page['title'];
            return $this->render('page/one', [
                'page' => $page,
                'h1' => $this->title
            ]);
        }

        public function show()
        {
            $this->title = 'Page show all';

            $pages = (new Page)->getAll();

            return $this->render('page/show', [
                'h1' => $this->title,
                'pages' => $pages
            ]);
        }
    }