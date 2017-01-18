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
include_once 'include/class.wine.php';
include_once 'include/class.xinwen.php';
include_once 'include/class.contact.php';

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
$wine = new Wine();
$xinwen = new Xinwen();
$contact = new Contact();

$admin = new Administrator ();


if ($_REQUEST ['login'] == "pass") {
	global $admin;
	$result = $admin->login ( " s_uname ='" . sqlreplace ( $_POST ['user'] ) . "' and s_pwd ='" . sqlreplace ( $_POST ['pwd'] ) . "'" );
	if (! empty ( $result )) {
		unset($_SESSION ['id'] );
		$_SESSION ["user"] = $result;
		$_SESSION ['id'] = $result[0]['s_level '];
		$result = $_f->_GetAllNew_china ();
				$smarty->assign ( "flist", $result );
		//$smarty->display ( "newadmin/Admin_Activity_List.html" );
			$smarty->display("newadmin/Admin_Add_Wine.html");
	//header ( "location:templates/newadmin/Admin_Add_Wine.html" );
	} else {
		$smarty->display ( "admin/login.html" );
	}
}

if (! empty ( $_SESSION ["user"] )) {
	switch ($_REQUEST ['action']) {
		//登陆
		case 'login' :
			
			break;
		case 'index';
			$smarty->display ( "newadmin/Admin_Wine_List.html" );
			break;
		case "guestlist" :
			$result = $iuser->Get ();
			$smarty->assign ( "flist", $result );
			$smarty->display ( "admin/Admin_User_List.html" );
			break;
		case "guestedit" :
			if (! empty ( $_GET ['u_id'] )) {
				$result = $iuser->Get ( " and u_id=" . $_GET ['u_id'] );
				$smarty->assign ( "guest", $result );
			}
			$smarty->display ( "admin/Admin_Edit_User.html" );
			break;
		case "updateguest" :
			$iuser->Update ( $_POST, $_POST ['u_id'] );
			header ( "location:/admin.php?action=guestlist" );
			break;

		/****************************************红酒*********************************************************/

		case "addWine" :
			header ( "Context-type:text/html;charset=utf-8" );
			fck();
			if (! empty ( $_FILES ['wineimage'] [tmp_name] )) {
				$b = $_img->upLoad ( "wineimage", "include/Public/Wine/", 10000 );
			}
			$wine->addWine ( $_POST,$b);
			header ( "location:/admin.php?action=Wine_List" );
			break;
		
		
		case "updateWine" :
			header ( "Context-type:text/html;charset=utf-8" );
			fck();	
			if (! empty ( $_FILES ['wineimage'] [tmp_name] )) {
				$b = $_img->upLoad ( "wineimage", "include/Public/Wine/", 10000 );
			}			
			$wine->updateWine( $_POST,$b);
			header ( "location:/admin.php?action=Wine_List" );
			break;
		
		case "Wine_List" :
            header("Context-type:text/html;charset=utf-8");
            $p = "";

            $result = $wine->getWine($p);
            $smarty->assign("flist",$result);
            $smarty->display("newadmin/Admin_Wine_List.html");

			break;
			
		case "Wine_Edit" :
			header ( "Context-type:text/html;charset=utf-8" );		
			$result = $wine->getWine ( " and w_id=" . $_GET ['wid'] );
			fck ( $result [0] ['w_content'] );
			$smarty->assign ( "wine", $result );
			$smarty->display ( "newadmin/Admin_Edit_Wine.html" );
			break;
			
		case "deleteWine" :
			$wine->_deleteWine ( $_REQUEST ['wid'] );
			break;
			
		/****************************************新闻*********************************************************/
		case "addXinwen" :
			header ( "Context-type:text/html;charset=utf-8" );
			fck();
			if (! empty ( $_FILES ['xinwenimage'] [tmp_name] )) {
				$b = $_img->upLoad ( "xinwenimage", "include/Public/Xinwen/", 10000 );
			}
			$xinwen->addXinwen ( $_POST,$b);
			header ( "location:/admin.php?action=Xinwen_List" );
			break;
			
		case "Xinwen_List" :
            header("Context-type:text/html;charset=utf-8");
            $p = "";
			
            $result = $xinwen->getXinwen($p);
            $smarty->assign("flist",$result);
            $smarty->display("newadmin/Admin_Xinwen_List.html");
			break;
		case "updateXinwen" :
			header ( "Context-type:text/html;charset=utf-8" );
			fck();	
			if (! empty ( $_FILES ['xinwenimage'] [tmp_name] )) {
				$b = $_img->upLoad ( "xinwenimage", "include/Public/Xinwen/", 10000 );
			}
			$xinwen->updateXinwen( $_POST,$b);
			header ( "location:/admin.php?action=Xinwen_List" );
			break;	
		case "Xinwen_Edit" :
			header ( "Context-type:text/html;charset=utf-8" );		
			$result = $xinwen->getXinwen ( " and x_id=" . $_GET ['xid'] );
			fck ( $result [0] ['x_content'] );
			$smarty->assign ( "xinwen", $result );
			$smarty->display ( "newadmin/Admin_Xinwen_Edit.html" );
			break;
			
		case "deleteXinwen" :
			$xinwen->_deleteXinwen ( $_REQUEST ['xid'] );
			break;
/**************************************************客户******************************************************/
		case "addContact" :
			header ( "Context-type:text/html;charset=utf-8" );
			fck();
			
			$contact->addContact ( $_POST);
			header ( "location:/admin.php?action=Contact_List" );
			break;
			
		case "Contact_List" :
            header("Context-type:text/html;charset=utf-8");
            $p = "";
		
            $result = $contact->getContact($p);
            $smarty->assign("flist",$result);
            $smarty->display("newadmin/Admin_Contact_List.html");
			break;
		case "updateContact" :
			header ( "Context-type:text/html;charset=utf-8" );
			fck();	
			
			$contact->updateContact( $_POST);
			header ( "location:/admin.php?action=Contact_List" );
			break;
		case "Contact_Edit" :
			header ( "Context-type:text/html;charset=utf-8" );		
			$result = $contact->getContact ( " and c_id=" . $_GET ['cid'] );
			fck ( $result [0] ['c_content'] );
			$smarty->assign ( "contact", $result );
			$smarty->display ( "newadmin/Admin_Contact_Edit.html" );
			break;
			
		case "deleteContact" :
			$contact->_deleteContact ( $_REQUEST ['cid'] );
			break;
		/*************************************************************************************************/
		//跳转页面
		case "page" :
			fck ();
			$class = $i->GetAllCalss ( " and c_status=1" );
			$smarty->assign ( "class", $class );
			$smarty->display ( "newadmin/Admin_" . $_REQUEST ['page'] . ".html" );
			break;
		//退出
		case "exit" :
			unset ( $_SESSION ['admin'] );
			$smarty->display ( "admin/login.html" );
			break;
		
	
		//跳转登录页面
		default :
			//$smarty->display ( "admin/login.html" );
	
	}
} else {
	$smarty->display ( "admin/login.html" );
}/*
function exists($pvalue,$class){
    $str=null;
    switch($class){
        case "数字":
            is_numeric($pvalue)?true:jsalert('请输入数字');
        //case ""
    }
}

function jsalert($_s){
    echo "<script type='javascript'>alert('"+$_s+"');</script>";
}
/*
 * 判断是否登陆
 *//*
if (empty ( $_SESSION ['admin'] )) {
	$smarty->display ( "admin/login.html" );

} else {
	$smarty->display ( "admin/index.html" );
}

*/
function exitscontrol($value, $mes) {
	if (empty ( $value )) {
		echo "<script type='text/javascript'>alert('" + $mes + "'不能为空，请输入！);window.history.go(-1);</script>";
		exit ();
	}
}
?>
