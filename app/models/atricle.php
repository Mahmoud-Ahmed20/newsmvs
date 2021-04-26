<?php
namespace news\models;
use news\core\model;

class atricle extends model
{
   public function GetAllAtricle()
   {
    $data = model::db()->rows("SELECT * FROM posts");
    return $data;
   }
   public function GetAtricle($id)
   {
       $data = model::db()->row("SELECT * FROM posts WHERE `id` = $id");
       return $data;
   }
   public function UpdateAtricle($data,$id)
   {
       $data = model::db()->update("posts",$data,$id);
       return $data; 
   }
   public function DeleteAtricle($id)
   {
       $data = model::db()->delete("posts",['id'=>$id]);
       return $data;
   }
   public function AddAtricle($data)
   {
       $data = model::db()->insert("posts",$data);
       return $data; 
   }






}


