<?php
    require_once 'core/Controller.php';
    require_once 'project/Controller.php';

    $coreController = new \Core\Controller;
    $projectController = new \Project\Controller;

    var_dump($coreController);
    var_dump($projectController);