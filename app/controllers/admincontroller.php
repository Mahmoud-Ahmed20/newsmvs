<?php
namespace news\controllers;

use news\core\controller;
use news\core\Session;
use news\models\user;
use news\core\helpars;
use GUMP;


class admincontroller extends controller
{
    public $user_data;
    public $user;
    public function __construct()
    {
        Session::Start();
       $this->user_data =  Session::Get('user');
        if(empty($this->user_data))
        {
            echo "not asses";die;

        }
      
        $this->user=new user;
    }
    public function index()
    {
        
        $data = $this->user->GetAllUsers();
        // echo "<pre>";
        // print_r($data);die;
        $this->view('/back/adminview',['data'=>$data]);
    }
    public function delete($id)
    {
        $data = $this->user->deleteUser($id);
            
        if(empty($data))
        {
            
            helpars::reddirect('admin/index');
        }
    }
    public function update($id)
    {

        $data = $this->user->GetUserRow($id);
        $this->view('/back/updateamin',['data'=>$data]);
    }
        public function PostUpdate()
        {
        

            if(!empty($data))
            {
            var_dump($data);die;

                
                $data = ['name'=>$_POST['name'],'email'=>$_POST['email']];   
            }else{
                $data = ['name'=>$_POST['name'],'email'=>$_POST['email'],'password'=>$_POST['password']];
            }

                $id = ['id'=>$_POST['id']];
            
            $data=$this->user->UpdateUser($data,$id);
            if(isset($data))
            {
                helpars::reddirect('admin/index');
            }

        }
        public function Regester()
        {
            $this->view('/back/adminregester',['titel','hallo']);
        }
        public function GETRegesterAdmin()
        { 
            $v = GUMP::is_valid ($_POST,[
                'name' =>'required',
                'email' => 'required',
                'password'=>'required'
            ]);
            if($v==1)
            {
                
                $data=$this->user->Regester($_POST['name'],$_POST['email'],$_POST['password']);
                Session::Set('user',$data);
                // print_r($data);die;
                // $title='Regester';
                // $this->view('/home/login',['title'=>$title]);
                helpars::reddirect('admin/index');

            }
        
        }
}