<?php

namespace Source\Support;

use Rain\Tpl;

class Rain
{
    public function __construct()
    {
        $config = array(
            "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."theme".DIRECTORY_SEPARATOR."views",
            "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."cache",
            "debug"         => true, // set to false to improve the speed
        );
        
        Tpl::configure( $config );
    }

    public function __destruct()
    {
        
    }
}