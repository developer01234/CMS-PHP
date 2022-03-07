<?php

use Engine\Cms;
use Engine\DI\DI;

try {
    // Dependency injection
    $di = new DI();
    
    $cms = new CMS($di);
    $cms->run();
    
} catch (\ErrorException $e) {
    echo $e->getMessage();
}

