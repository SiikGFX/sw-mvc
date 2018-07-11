<?php
/**
 * Created by PhpStorm.
 * User: UniQ
 * Date: 15.01.2018
 * Time: 20:12
 */

class View
{
    function __construct()
    {
        
    }

    public function render($name, $noInclude = false)
    {
        if ($noInclude == true) {
            require_once 'application/views/' . $name . '.php';
        } else {

            require_once 'application/views/_template/header.php';
            require_once 'application/views/' . $name . ".php";
            require_once 'application/views/_template/footer.php';
        }
    }
}