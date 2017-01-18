<?php
include_once './config.inc.php';
$action = !empty($_GET['action']) && in_array($_GET['action'],array('upload','doupload')) ? trim($_GET['action']): 'upload';
include_once PATH.DS.'source/source_'.$action.'.php';
?>