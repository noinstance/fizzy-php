<?php

$segments = preg_split('/\//', $_SERVER['REQUEST_URI'], -1, PREG_SPLIT_NO_EMPTY);
$controller = $segments[1];
$action = count($segments) > 1 ? $segments[2] : 'index';
$path = FPATH . '/app/controllers/' . $controller . '.php';
require_once($path);

$controller = ucfirst(strtolower($controller));
$c = new $controller();
$c->controller = $controller;
$c->action = $action;
call_user_func_array(array($c, $action), array()); 