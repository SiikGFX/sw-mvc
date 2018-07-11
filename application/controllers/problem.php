<?php
/**
 * Created by PhpStorm.
 * User: UniQ
 * Date: 15.01.2018
 * Time: 20:14
 */

class Problem extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->msg = "This page doesn't exist!";
        $this->view->render('problem/productAdd');
    }
}