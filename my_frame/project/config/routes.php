<?php
    use \Core\Route;

    return [
        new Route('/myshow/', 'page', 'show'),
        new Route('/myshow/:id/', 'page', 'show'),
        new Route('/mytest/', 'page', 'test'),
    ];