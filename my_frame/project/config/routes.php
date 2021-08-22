<?php
    use \Core\Route;

    return [
        new Route('/myshow/', 'page', 'show'),
        new Route('/page/:id/', 'page', 'one'),
    ];