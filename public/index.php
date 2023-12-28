<?php

session_start();

// membuat konstanta ROOT
define("ROOT", dirname(dirname(__FILE__)));
define('DS', DIRECTORY_SEPARATOR);

// menyimpandata url pada variabel $url
$url = isset($_GET['url']) ? $_GET['url'] : '';

// memanggil file configurasi library yang dibutuhkan 
require_once(ROOT . '/config/config.php');
require_once(ROOT . '/library/model.class.php');
require_once(ROOT . '/library/view.class.php');
require_once(ROOT . '/library/controller.class.php');

//membuat function autoload
function _autoload($className)
{
  $dir = ROOT . DS . str_replace("\\", DS, $className) . '.php';
  if (file_exists($dir)) require($dir);
}

//membuat function unutkmengatur pesan error
function setReporting()
{
  if (DEVELOPMENT_ENVIRONMANT == true) {
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
  } else {
    error_reporting(E_ALL);
    ini_set('display_errors', 'Off');
    ini_set('log_errors', 'On');
    ini_set('error_log', ROOT . '/tmp/log/error.log');
  }
}

//membuat funcion untuk memanggil controller sesuai nilai $url 
function callHook()
{
  global $url;
  $urlArray = explode('/', $url);

  $controller = (!empty($urlArray[0])) ? $urlArray[0] : DEFAULT_CONTROLLER;

  $controllerPath = ROOT . '/app/controllers/' . ucfirst($controller) . '.controller.php';
  if (file_exists($controllerPath)) {
    array_shift($urlArray);
    $action = (!empty($urlArray[0])) ? $urlArray[0] : 'index';
    array_shift($urlArray);
    $parameter = $urlArray;

    require_once($controllerPath);
    $controllerName = ucfirst($controller) . 'Controller';
    $object = new $controllerName;
    if (method_exists($object, $action)) {
      call_user_func_array(array($object, $action), $parameter);
    } else {
      die('Action Not Found !');
    }
  } else {
    die('Controller Not Found !');
  }
}
setReporting();
callHook();