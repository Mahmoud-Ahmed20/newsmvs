<?php
namespace news\controllers;
use news\models\category;
use news\core\controller;
use news\core\Session;
use news\core\helpars;

class admincategorycontroller extends controller
{
    public $user_data;
    public $category;
    public function __construct()
    {
        Session::Start();
       $this->user_data =  Session::Get('user');
        if(empty($this->user_data))
        {
            echo "not asses";die;

        }
       
        $this->category=new category;
    }
    public function index()
    {
        
        $data=$this->category->GetAllCategory();
        $this->view('/back/category',['title'=>'back','data'=>$data]);
    }
    public function add()
    {
        //  print_r($this->user_data['id']);die;
        $this->view('/back/addcategory',['title'=>'back']);
       
    }
    public function PostAdd()
    {
        $img= $_FILES['img'];
            // var_dump($img);die;
        move_uploaded_file($img['tmp_name'],'img/'.$img['name']);

        //database
        $PostAddData = ['name'=>$_POST['name'],'icon'=>$_POST['icon'],'user_id'=>$this->user_data['id'],'img'=>$img['name']];
        // print_r($PostAddData);die;
        $data = $data=$this->category->AddCategory($PostAddData);
        if($data)
        {
            helpars::reddirect('admincategory/index');
        }
    }

    public function delete($id)
    {
        
        $data = $this->category->deleteCategory($id);
        if($data)
        {
            helpars::reddirect('admincategory/index');
        }
    }
    public function update($id)
    {
        
        $data = $this->category->GetCategory($id);
        $this->view('/back/updatecategory ',['data'=>$data]); 
    }
    public function PostUpdate()
    {
        if(!empty($_FILES['img']['name']))
        {
            $img= $_FILES['img'];
            move_uploaded_file($img['tmp_name'],'img/'.$img['name']);
            $data = ['name'=>$_POST['name'],'icon'=>$_POST['icon'],'user_id'=>$this->user_data['id'],'img'=>$img['name']];
    
        }else{
            $data = ['name'=>$_POST['name'],'icon'=>$_POST['icon'],'user_id'=>$this->user_data['id']];
            
        }
    //database
    // print_r($PostAddData);die;
    $id = ['id'=>$_POST['id']];
    
    $data=$this->category->UpdateCategory($data,$id);
    if($data)
    {
        helpars::reddirect('admincategory/index');
    }
    }
}

