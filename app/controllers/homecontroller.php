<?php
namespace news\controllers;
use news\core\controller;
use news\models\user;
use GUMP;
use news\core\model;
use news\core\Session;
use news\core\helpars;
use news\models\category;
use news\models\atricle;
class homecontroller extends controller 
{
        public $category;
        public $atricle;
        public function __construct()
        {
            Session::Start();
            $this->category=new category;
            $this->atricle=new atricle;
        }

        public function index()
        {
         $data = $this->category->GetAllCategory();
         $dataAtricle = $this->atricle->GetAllAtricle();
            $this->view('/home/index',['title'=>'home','data'=>$data,'dataAtricle'=>$dataAtricle]);
        }
        public function details()
        {
            $this->view('/home/details',['title'=>'details']);
        }
        // public function Regester()
        // {
        //     $title='Regester';
        //     $this->view('/home/Regester',['title'=>$title]);
        // }
        // public function GETRegester()
        // { 
        //     $v = GUMP::is_valid ($_POST,[
        //         'name' =>'required',
        //         'email' => 'required',
        //         'password'=>'required'
        //     ]);
        //     if($v==1)
        //     {
        //         $user = new user;
        //         $data=$user->Regester($_POST['name'],$_POST['email'],$_POST['password']);
        //         Session::Set('user',$data);
        //         $title='Regester';
        //         $this->view('/home/login',['title'=>$title]);
        //     }
        
        // }
        public function login()
        {
            $title='login';
            $this->view('/home/login',['title'=>$title]);
        }
        // public function PostLoginAdmin()
        // {
        //     $v = GUMP::is_valid ($_POST,[
        //         'email' => 'required',
        //         'password' => 'required'
        //     ]);
        
        //     if($v == 1)
        //     {
        //         $user = new user;
        //         $data=$user->GetUser($_POST['email'],$_POST['password']);
        //             Session::Set('user',$data);
        //             helpars::reddirect('adminpost/index');
        //     }
        // }
        public function PostLogin()
        {
            $v = GUMP::is_valid ($_POST,[
                'email' => 'required'
            ]);
        
            if($v == 1)
            {
                $user = new user;
                $data=$user->GetUser($_POST['email'],$_POST['password']);

                    Session::Set('user',$data);
                    helpars::reddirect('adminpost/index');
            }
        }
        public function logout()
        {
            Session::Stop();
            helpars::reddirect('home/login');
        }

}