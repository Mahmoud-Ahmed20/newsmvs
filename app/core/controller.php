<?php
namespace news\core;

class controller
{
    // this lochione folder viwes

    


     public function view($path,$pram)
     {
        //  echo VIEWS.$path.".php";die;
         extract($pram);
        require_once(VIEWS.$path.".php");
     }


    

}