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
    private $defaults = [
        "data" => []
    ];

    /**
     * @var 
     * array that will be merged with $defaults and options (variable by __construct method)
     */
    private $options = [];

    public function __construct(array $options)
    {
        //merge arrays
        $this->options = array_merge($this->defaults, $options);
        
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