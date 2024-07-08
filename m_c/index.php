<?php

//use app\controller\DoctorController;
//require_once __DIR__ . '/app/controller/CompetenciesController.php';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/vendor/lib/MysqliDb.php';
require_once __DIR__ . '/app/controller/DoctorController.php';
require_once __DIR__ . '/app/controller/competenciesController.php';
$config = require 'config/config.php';
$db = new MysqliDb(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);
//echo $_SERVER['REQUEST_URI'];
$request = $_SERVER['REQUEST_URI'];
define('BASE_PATH', '/m_c2/');
$controller1 = new DoctorController($db);
$controller2 = new competenciesController($db);
// $comp = new CompetenciesController($db);
switch ($request) {
 
    case BASE_PATH . 'add':
    $controller1->addDoctor();
    break;
    case BASE_PATH . 'showdoctors':
      $controller1->showdoctors();
        break;
    case BASE_PATH. 'delete?id_d='. $_GET['id_d']:
        $controller1->deletedoctor($_GET['id_d']);
        break;
    case BASE_PATH . 'updatedoctor?id_d=' . $_GET['id_d']:
        $controller1->updatedoctor($_GET['id_d']);
        break;
        case BASE_PATH . 'showidd?id_d='.$_GET['id_d']:
            $controller1->showidd($_GET['id_d']);
              break;
              case BASE_PATH . 'addcomp?id_d='.$_GET['id_d']:
                $controller2->addcomp($_GET['id_d']);
                break;
                case BASE_PATH . 'updatecomp?id_d=' . $_GET['id_d']:
                    $controller2->updatecomp($_GET['id_d']);
                    break;

    default:
        break;        
            }

?>