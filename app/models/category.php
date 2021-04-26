<?php
namespace news\models;
use news\core\model;
class category extends model
{
    public function GetAllCategory()
    {
        $data = model::db()->rows("SELECT * FROM category");
        return $data;
    }
    public function GetCategory($id)
    {
        $data = model::db()->row("SELECT * FROM category WHERE `id` = $id");
        return $data;
    }
    public function deleteCategory($id)
    {
        $data = model::db()->delete("category",['id'=>$id]);
        return $data;
    }
    public function AddCategory($data)
    {
        $data = model::db()->insert("category",$data);
        return $data; 
    }
    public function UpdateCategory($data,$id)
    {
        $data = model::db()->update("category",$data,$id);
        return $data; 
    }
}