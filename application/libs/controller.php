<?php
/**
 * Created by PhpStorm.
 * User: UniQ
 * Date: 15.01.2018
 * Time: 20:11
 */

class Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    public function loadModel($name)
    {

        $path = 'application/models/' . $name . '_model.php';

        if (file_exists($path)) {
            require_once 'application/models/' . $name . '_model.php';

            $modelName = $name . 'Model';
            $this->model = new $modelName();
        }
    }
}