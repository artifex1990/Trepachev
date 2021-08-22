<?php
    namespace Project\Controllers;

    use \Core\Controller;

    class PageController extends Controller
    {
        public function show($params)
        {
            $this->title = 'Page show';

            return $this->render('page/show', ['text' => 'Hello, Wrold!']);
        }
    }