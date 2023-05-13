<?php 
return [
    PATH . '/' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    PATH . '/cart' => [
        'controller' => 'cart',
        'action' => 'index'
    ],
    PATH . '/sign-in' => [
        'controller' => 'login',
        'action' => 'index'
    ],
    PATH . '/sign-up' => [
        'controller' => 'register',
        'action' => 'index'
    ],
    
    // Fetch urls
    PATH . 'mainHandler' => [
        'controller' => 'main',
        'action' => 'requestHandler'
    ],
    PATH . 'cartHandler' => [
        'controller' => 'cart',
        'action' => 'requestHandler'
    ],

];
?>
