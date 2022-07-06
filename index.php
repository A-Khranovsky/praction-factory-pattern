<?php 

spl_autoload_register();

use Factory\Router;

$obj = Router::parse('users/1');
echo $obj->render();