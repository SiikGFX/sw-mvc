<?php
/**
 * Created by PhpStorm.
 * User: UniQ
 * Date: 15.01.2018
 * Time: 20:47
 */

class productList extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->productList = $this->model->productList();
        $this->view->render('productList/index');
    }

    public function create()
    {
        $data = array();
        $data['sku'] = $_POST['sku'];
        $data['name'] = $_POST['name'];
        $data['price'] = $_POST['price'];
        $data['type'] = $_POST['type'];
        $data['size'] = $_POST['size'];
        $data['weight'] = $_POST['weight'];
        $data['height'] = $_POST['height'];
        $data['width'] = $_POST['width'];
        $data['length'] = $_POST['length'];
        $data['img'] = $_POST['img'];

        // @TODO: Do your error checking!

        $this->model->create($data);
        header('Location: ' . URL . 'product');
    }

    public function edit($id)
    {
        // fetch individual user
        $this->view->product = $this->model->productSingleList($id);
        $this->view->render('productList/edit');
    }

    public function editSave($id)
    {
        $data = array();
        $data['id'] = $id;
        $data['sku'] = $_POST['sku'];
        $data['name'] = $_POST['name'];
        $data['price'] = $_POST['price'];
        $data['type'] = $_POST['type'];
        $data['size'] = $_POST['size'];
        $data['weight'] = $_POST['weight'];
        $data['height'] = $_POST['height'];
        $data['width'] = $_POST['width'];
        $data['length'] = $_POST['length'];
        $data['img'] = $_POST['img'];

        // @TODO: Do your error checking!

        $this->model->editSave($data);
        header('Location: ' . URL . 'product');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: ' . URL . 'product');
    }

    public function massDelete($type)
    {
        $this->model->massDelete($type);
        header('Location: '.URL. 'product');
    }
}
