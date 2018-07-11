<?php
/**
 * Created by PhpStorm.
 * User: UniQ
 * Date: 15.01.2018
 * Time: 20:11
 */

class Application
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //print_r($url);

        if (empty($url[0])) {
            require_once 'application/controllers/productList.php';
            $controller = new productList();
            $controller->index();
            return false;
        }

        $file = 'application/controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require_once $file;
        } else {
            header('Location: productList');
        }

        $controller = new $url[0];
        $controller->loadModel($url[0]);

        // calling methods
        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                $this->problem();
            }
        } else {
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    $this->problem();
                }
            } else {
                $controller->index();
            }
        }
    }

    function problem()
    {
        require_once 'application/controllers/problem.php';
        $controller = new Problem();
        $controller->index();
        return false;
    }
}

