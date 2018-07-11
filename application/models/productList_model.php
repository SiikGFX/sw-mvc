<?php
/**
 * Created by PhpStorm.
 * User: UniQ
 * Date: 15.01.2018
 * Time: 22:28
 */

class productListModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function productList()
    {
        $sth = $this->db->prepare('SELECT id, sku, name, price, type, size, weight, height, width, length, img FROM products');
        $sth->execute();
        return $sth->fetchAll();
    }

    public function productSingleList($id)
    {
        $sth = $this->db->prepare('SELECT id, sku, name, price, type, size, weight, height, width, length, img FROM products WHERE id = :id');
        $sth->execute(array(':id' => $id));
        return $sth->fetch();
    }

    public function create($data)
    {
        $sth = $this->db->prepare('INSERT INTO products
                (`sku`, `name`, `price`, `type`, `size`, `weight`, `height`, `width`, `length`, `img`)
                VALUES (:sku, :name, :price, :type, :size, :weight, :height, :width, :length, :img)
                ');

        $sth->execute(array(
            ':sku' => $data['sku'],
            ':name' => $data['name'],
            ':price' => $data['price'],
            ':type' => $data['type'],
            ':size' => $data['size'],
            ':weight' => $data['weight'],
            ':height' => $data['height'],
            ':width' => $data['width'],
            ':length' => $data['length'],
            ':img' => $data['img']
        ));
    }

    public function editSave($data)
    {
        $sth = $this->db->prepare('UPDATE products SET `sku` = :sku, `name` = :name,
            `price` = :price, `type` = :type, `size` = :size, `weight` = :weight,
            `height` = :height, `width` = :width, `length` = :length, `img` = :img WHERE id = :id');

        $sth->execute(array(
            ':id' => $data['id'],
            ':sku' => $data['sku'],
            ':name' => $data['name'],
            ':price' => $data['price'],
            ':type' => $data['type'],
            ':size' => $data['size'],
            ':weight' => $data['weight'],
            ':height' => $data['height'],
            ':width' => $data['width'],
            ':length' => $data['length'],
            ':img' => $data['img']
        ));
    }

    public function delete($id)
    {
        $sth = $this->db->prepare('DELETE FROM products WHERE id = :id');
        $sth->execute(array(
            ':id' => $id
        ));
    }
    public function massDelete($type)
    {

        $sth = $this->db->prepare('DELETE FROM products WHERE type = :type');
        $sth->execute(array(
            ':type' => $type
        ));
    }
}
