<?php

namespace news\core;
class helpars 
{
    public static function reddirect($path)
    {
    header("LOCATION: ".DOMAIN_NAME.$path);
    
    }
}