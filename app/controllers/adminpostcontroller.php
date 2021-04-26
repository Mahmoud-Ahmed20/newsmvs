<?php
namespace news\controllers;

use news\core\controller;
use news\core\Session;
use news\models\atricle;
use news\core\helpars;


class adminpostcontroller extends controller
{
    public $user_data;
    public $atricle ;

    public function __construct()
    {
        Session::Start();
       $this->user_data =  Session::Get('user');
        if(empty($this->user_data))
        {
            echo "not asses";die;

        }
        $this->atricle=new atricle;
    
    }
    public function index()
    {
        
        $dataAtricle = $this->atricle->GetAllAtricle();
        $this->view('/back/articleview',['data'=>$dataAtricle]);
    }
    public function Update($id)
    {
        $dataUpdateAtricle  = $this->atricle->GetAtricle($id);
        $this->view('/back/updateatricle',['data'=>$dataUpdateAtricle]);
        
    }
    
    public function PostUpdate()
    {
        if(!empty($_FILES['img']['name']))
        {
            $img= $_FILES['img'];
            move_uploaded_file($img['tmp_name'],'img/'.$img['name']);
            $data = ['name'=>$_POST['name'],'title'=>$_POST['title'],'user_id'=>$this->user_data['id'],'img'=>$img['name']];
    
        }else{
            $data = ['name'=>$_POST['name'],'title'=>$_POST['title'],'user_Id'=>$this->user_data['id']];
            
        }
    $id = ['id'=>$_POST['id']];
    
    $data=$this->atricle->UpdateAtricle($data,$id);
    if($data)
    {
        helpars::reddirect('adminpost/index');
    }
    }
    public function DeleteAtricle($id)
    {
        
        $data = $this->atricle->DeleteAtricle($id);
        if($data)
        {
            helpars::reddirect('adminpost/index');

        }
    }
    public function AddAtricle()
    {

        $this->view('/back/addarticle',['title'=>'home']);

    }
    public function PostAddAtricle()
    {
        $img= $_FILES['img'];
        move_uploaded_file($img['tmp_name'],'img/'.$img['name']);

        //database
        $PostAddData = ['name'=>$_POST['name'],'title'=>$_POST['title'],'user_id'=>$this->user_data['id'],'img'=>$img['name']];
        $data = $data=$this->atricle->AddAtricle($PostAddData);
        if($data)
        {
            helpars::reddirect('adminpost/index');

        }
    }



}

