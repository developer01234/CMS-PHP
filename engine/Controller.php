<?php

namespace Engine;

abstract class Controller {

    /**
      @var \Engine\DI\DI
     */
    protected $di;

    public function __construct($di) {
        
    }

}
