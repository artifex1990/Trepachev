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
        
        public function all()
        {
            $this->title = 'Список всех страниц';
            
            $pages = (new Page) -> getAll();
            return $this->render('page/all', [
                'pages' => $pages,
                'h1' => $this->title
            ]);
        }
    }