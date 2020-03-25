<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\ShopController::index'], [], [['text', '/']], [], []],
    'produits' => [[], ['_controller' => 'App\\Controller\\ShopController::produits'], [], [['text', '/produits']], [], []],
    'produitSingle' => [['id'], ['_controller' => 'App\\Controller\\ShopController::produitSingle'], [], [['text', '}'], ['variable', '', '[^/]+', 'id', true], ['text', '/Shop/produitSingle/{']], [], []],
    'removeShop' => [['id'], ['_controller' => 'App\\Controller\\ShopController::removeShop'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Shop/removeShop']], [], []],
    'removePanier' => [['id'], ['_controller' => 'App\\Controller\\ShopController::removePanier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Shop/removePanier']], [], []],
];
