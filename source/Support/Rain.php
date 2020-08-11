<?php

namespace Source\Support;

use Rain\Tpl;

class Rain
{
    /**
     * @var
     * Instance of Tpl
     */
    private $tpl;
    
    /**
     * @var
     * options array
     */
    private $defaults;

    public function __construct()
    {
        $config = array(
            "tpl_dir"       => url("theme".DIRECTORY_SEPARATOR."views"),
            "cache_dir"     => url("cache"),
            "debug"         => false
        );
        
        Tpl::configure( $config );

        $this->tpl = new Tpl();
    }

    public function __destruct()
    {
        
    }
}