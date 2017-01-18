<?php
include_once "./config.inc.php";
$do = !empty($_GET['do']) && in_array($_GET['do'],array('index','save')) ? trim($_GET['do']):'index';
include PATH.DS.'source/index_'.$do.'.php';
