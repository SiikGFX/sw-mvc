<?php
/**
 * Created by PhpStorm.
 * User: UniQ
 * Date: 15.01.2018
 * Time: 20:13
 */

class productAdd extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->productList = $this->model->productList();
        $this->view->render('productAdd/index');
    }
}