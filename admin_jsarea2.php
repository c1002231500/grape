<?php
/*
 * 导入类库
 */
require_once 'ini.php';
require_once 'include/class.admin.php';
require_once 'include/class.news.php';
require_once 'include/initfunctions.php';
require_once 'include/Public/upload.php';
include_once 'include/member.php';
include_once 'include/interface.iDataBase.php';
include_once 'include/class.classes.php';
include_once 'include/class.brand.php';
include_once 'include/class.people.php';
include_once 'include/class.guyou.php';
include_once 'include/class.zimu.php';
include_once 'include/class.country.php';
include_once 'include/class.js.php';
include_once 'include/class.human.php';
include_once 'include/class.district.php';
include_once 'include/class.traffic.php';
include_once 'include/class.mall.php';
include_once 'include/class.media.php';
$iuser = new member ();
session_start();
error_reporting ( 0 );
global $smarty;
/*
 * 路由跳转
 */
header("Context-type:text/html;charset=utf-8");
session_start();
$_f = new news ();
$_img = new img ();
$i = new classes ();
$brand = new Brand ();
$people = new People ();
$guyou = new Guyou ();
$admin = new Administrator ();
$zimu = new Zimu();
$country = new Country();
$js = new Js();
$human = new Human();
$district = new District();
$traffic = new Traffic();
$mall = new Mall();
$media = new Media();



	switch ($_REQUEST ['action']) {
		
		case "updateJs2" :
			header ( "Context-type:text/html;charset=utf-8" );
			$result = $js->_editJsareaid2 ( $_POST);
			if ($result) {
				header ( "location:/admin.php?action=Js_List" );
			}
			break;
		
		
	}	
?>
