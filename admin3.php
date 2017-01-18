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
$iuser = new member ();
error_reporting(0);
global $smarty;
/*
 * 路由跳转
 */

$_f = new news ();
$_img = new img ();
$i = new classes ();
$brand = new Brand ();
$admin = new Administrator ();

if ($_REQUEST ['login'] == "pass") {
	global $admin;
	$result = $admin->login ( " s_uname ='" . sqlreplace ( $_POST ['user'] ) . "' and s_pwd ='" . sqlreplace ( $_POST ['pwd'] ) . "'" );
	if (! empty ( $result )) {
		unset($_SESSION ['id'] );
		$_SESSION ["user"] = $result;
		$_SESSION ['id'] = $result[0]['s_level '];
		$smarty->display ( "admin/index.html" );
	
	//header ( "location:templates/admin/index.html" );
	} else {
		$smarty->display ( "admin/login.html" );
	}
}
if (!empty($_SESSION ["user"])) {
    switch ($_REQUEST ['action']) {
        //登陆
        case 'login' :

            break;
        case "guestlist" :
            $result = $iuser->Get();
            $smarty->assign("flist", $result);
            $smarty->display("admin/Admin_User_List.html");
            break;
        case "guestedit" :
            if (!empty($_GET ['u_id'])) {
                $result = $iuser->Get(" and u_id=" . $_GET ['u_id']);
                $smarty->assign("guest", $result);
            }
            $smarty->display("admin/Admin_Edit_User.html");
            break;
        case "updateguest" :
            $iuser->Update($_POST, $_POST ['u_id']);
            header("location:/admin.php?action=guestlist");
            break;
        /*         * *************************************类别操作************************************************* */
        case "add_class" :
            $result = $i->Add($_POST);
            header("location:/admin.php?action=classlist");
            break;
        case "classlist" :
            $result = $i->Get();
            $smarty->assign("cs", $result);
            $smarty->display("admin/Admin_AddListEdit_Class.html");
            break;

        case "upclass" :
            $i->Update($_POST, $_POST ['id']);
            break;

        case "delclass" :
            $i->Dele($_POST ['id']);
            break;

        //小类


        case "add_style" :
            $result = $i->AddStyle($_POST);
            if ($result) {
                header("location:/admin.php?action=stylelist&cid=" . $_POST ['classid'] . "&name=" . $_POST ['classname']);
            }
            break;
        case "stylelist" :
            $result = $i->GetStyle(" and t_classid=" . $_GET ['cid']);
            $smarty->assign("clsid", $_GET ['cid']);
            $smarty->assign("clsname", $_GET ['name']);
            $smarty->assign("cs", $result);
            $smarty->display("admin/Admin_AddListEdit_type.html");
            break;

        case "upstyle" :
            $i->UpdateStyle($_POST, $_POST ['id']);
            break;

        case "delstyle" :
            $i->DeleStyle($_POST ['id']);
            break;
        case "loadType" :
            header("Context-type:text/html;charset=utf-8");
            $result = $i->GetStyle(" and t_classid=" . $_GET ['cid']);
            $str = "
               <select class='inp ipt-normal' id='n_ctype' name='n_ctype' style='width: 250px; font-weight: bold;'>
                <option value='0'>请选择小类</option>";
            for ($y = 0; $y < count($result); $y++) {
                if (!empty($_GET ['sid'])) {
                    if ($result [$y] ['t_id'] == $_GET ['sid']) {
                        $str .= "<option value='" . $result [$y] ['t_id'] . "' selected>" . $result [$y] ['t_name'] . "</option>";
                    } else {
                        $str .= "<option value='" . $result [$y] ['t_id'] . "'>" . $result [$y] ['t_name'] . "</option>";
                    }
                } else {
                    $str .= "<option value='" . $result [$y] ['t_id'] . "'>" . $result [$y] ['t_name'] . "</option>";
                }
            }
            $str .= "</select>";
            echo $str;
            break;
        case "loadcheckType" :
            header("Context-type:text/html;charset=utf-8");
            $result = $i->GetStyle(" and t_classid=" . $_GET ['cid']);
            $str = " ";
            for ($y = 0; $y < count($result); $y++) {
                $str .= "<div style='float:left;width:150px;height:28px;'><input name='b_type[]' type='checkbox' value='" . $result [$y] ['t_id'] . "' >" . $result [$y] ['t_name'] . "</div>";
            }
            echo $str;
            break;
        case "loadch" :
            header("Context-type:text/html;charset=utf-8");
            $result = $i->GetStyle(" and t_classid=" . $_GET ['cid']);
            $list = explode(",", $_GET ['sl']);
            $str = "";
            for ($y = 0; $y < count($result); $y++) {
                $z = 0;
                for ($i = 0; $i < count($list); $i++) {
                    //echo $result [$y] ['t_id'] . "==" . $list [$i];
                    if ($result [$y] ['t_id'] == $list [$i]) {
                        $z = 1;
                    }
                }
                if ($z == 1) {
                    $str .= "<div style='float:left;width:150px;height:28px;'><input name='b_type[]' type='checkbox' value='" . $result [$y] ['t_id'] . "' checked='checked'>" . $result [$y] ['t_name'] . "</div>";
                } else {
                    $str .= "<div style='float:left;width:150px;height:28px;'><input name='b_type[]' type='checkbox' value='" . $result [$y] ['t_id'] . "' >" . $result [$y] ['t_name'] . "</div>";
                }
            }
            echo $str;
            break;
        /*         * ********************************************************************************************** */

        case "addBrand" :
            header("Context-type:text/html;charset=utf-8");
            $class = $i->GetAllCalss(" and c_status=1");
            $smarty->assign("class", $class);
            if (!empty($_FILES ['brandimage'] [tmp_name])) {
                //$b=$_img->upLoadAndToSmall( "brandimage", "include/Public/Brand/", 10000,100,100,"include/Public/Brand/");
                $b = $_img->upLoad("brandimage", "include/Public/Brand/", 10000);
            }
            $brand->addBrands($_POST, $b);
            header("location:/admin.php?action=Brand_List");
            break;
        case "updateBrand" :
            header("Context-type:text/html;charset=utf-8");
            if (!empty($_FILES ['brandimage'] [tmp_name])) {
                $b = $_img->upLoad("brandimage", "include/Public/Brand/", 10000);
            }

            $brand->updatBrands($_POST, $b);
            header("location:/admin.php?action=Brand_List");
            break;

        case "Brand_List" :
            header("Context-type:text/html;charset=utf-8");
            $p = "";
            if (!empty($_POST["search"])) {
                $p.=" and b_cname like '%" . $_POST["search"] . "%'";
            }
            if (!empty($_POST["esearch"])) {
                $p.=" and b_ename like '%" . $_POST["esearch"] . "%'";
            }
            if (!empty($_POST["jsearch"])) {
                $p.=" and b_jname like '%" . $_POST["jsearch"] . "%'";
            }
            $result = $brand->getBrands($p);
            if (!empty($_SESSION['countbrand'])) {
                $smarty->assign("countbrand", $_SESSION['countbrand']);
                unset($_SESSION['countbrand']);
            }
            $smarty->assign("flist", $result);
            $smarty->display("admin/Admin_Brand_List.html");
            break;
        case "getBrandList" :
            $result = $brand->getBrands(" and b_static=1 and b_firstword='" . trim($_POST ['_p'] . "'"));
            $pr = "";
            if (!empty($result)) {
                if (!empty($_POST ['ts'])) {
                    for ($i = 0; $i < count($result); $i++) {
                        if ($result [$i] ['b_id'] == $_POST ['ts']) {
                            $pr .= "<div style='float:left;width:150px;height:28px;'><input name='brand' type='radio' checked value='" . $result [$i] ['b_id'] . "'>" . $result [$i] ['b_cname'] . "</div>";
                        } else {
                            $pr .= "<div style='float:left;width:150px;height:28px;'><input name='brand' type='radio' value='" . $result [$i] ['b_id'] . "'>" . $result [$i] ['b_cname'] . "</div>";
                        }
                    }
                } else {
                    for ($i = 0; $i < count($result); $i++) {
                        $pr .= "<div style='float:left;width:150px;height:28px;'><input name='brand' type='radio' value='" . $result [$i] ['b_id'] . "'>" . $result [$i] ['b_cname'] . "</div>";
                    }
                }
            } else {
                $pr .= "没有该品牌";
            }
            echo $pr;
            break;
        case "Brand_Edit" :
            header("Context-type:text/html;charset=utf-8");
            $class = $i->GetAllCalss(" and c_status=1");
            $smarty->assign("class", $class);
            $result = $brand->getBrands(" and b_id=" . $_GET ['bid']);
            $smarty->assign("brand", $result);
            $smarty->display("admin/Admin_Edit_Brand.html");
            break;
        /*         * ****************************************新闻维护****************************************************** */
        //添加新闻
        case "addnew" :
            header("Context-type:text/html;charset=utf-8");

            if (!empty($_FILES ['n_bimgs'] [tmp_name])) {
                $b = $_img->upLoad("n_bimgs", "include/Public/Upload/", 10000);
            }
            if (!empty($_FILES ['n_simgs'] [tmp_name])) {
                $s = $_img->upLoad("n_simgs", "include/Public/Upload/", 10000);
            }
            $result = $_f->_insertData($_POST, $b, $s);
            if (!empty($result)) {
                header("location:/admin.php?action=newslist");
            }
            break;
        //新闻列表
        case "newslist" :
            $result = $_f->_GetAllNew();

            if ($result) {
                if ($_SESSION ['count']) {
                    $smarty->assign("count", $_SESSION ['count']);
                }
                if (!empty($_SESSION ['count'])) {
                    $smarty->assign("count", $_SESSION ['count']);
                }

                $smarty->assign("flist", $result);
                $smarty->display("admin/Admin_News_List.html");
            }
            break;
        case "searchnews":
            $sql="";
            if(!empty($_POST['search'])){
                $sql .=" and n_title like '%".trim($_POST['search'])."%' or n_context like '%".trim($_POST['search'])."%' or  n_detail like '%".trim($_POST['search'])."%' or n_keyword like '%".trim($_POST['search'])."%'";
            }
            if(!empty ($_POST['n_starttime'])){
                $sql .=" and n_starttime like '%".trim($_POST['search'])."%'";
            }
            
            $result = $_f->_GetAllNew("","","","","",$sql);

            if ($result) {
                if ($_SESSION ['count']) {
                    $smarty->assign("count", $_SESSION ['count']);
                }
                if (!empty($_SESSION ['count'])) {
                    $smarty->assign("count", $_SESSION ['count']);
                }

                $smarty->assign("flist", $result);
                $smarty->display("admin/Admin_News_List.html");
            }
            break;
        //跳转页面
        case "page" :
            fck();
            $class = $i->GetAllCalss(" and c_status=1");
            $smarty->assign("class", $class);
            $smarty->display("admin/Admin_" . $_REQUEST ['page'] . ".html");
            break;
        //退出
        case "exit" :
            unset($_SESSION ['admin']);
            $smarty->display("admin/login.html");
            break;

        // ajax删除新闻
        case "ajaxremove" :
            $_f->_deletenews($_POST ['nid']);
            break;
        //新闻编辑
        case "newedit" :
            header("Context-type:text/html;charset=utf-8");
            $class = $i->GetAllCalss(" and c_status=1");
            $smarty->assign("class", $class);

            $result = $_f->getByid($_GET ['nid']);
            fck($result [0] ['n_context']);
            $smarty->assign("news", $result);
            $smarty->display("admin/Admin_Edit_News.html");
            break;
        case "updateNews" :
            header("Context-type:text/html;charset=utf-8");
            if (empty($_POST ['dbimg'])) {
                if (!empty($_FILES ['n_bimgs'] [tmp_name])) {
                    $b = $_img->upLoad("n_bimgs", "include/Public/Upload/", 10000);
                } else {
                    $b = "nofile";
                }
            } else {
                $b = "";
            }
            if (empty($_POST ['dsimg'])) {
                if (!empty($_FILES ['n_simgs'] [tmp_name])) {
                    $s = $_img->upLoad("n_simgs", "include/Public/Upload/", 10000);
                } else {
                    $s = "nofile";
                }
            } else {
                $s = "";
            }
            $result = $_f->_editnews($_POST, $b, $s);
            if ($result) {
                header("location:/admin.php?action=newslist");
            }
            break;
        case "deletesBrand" :
            $brand->_deleteBrands($_REQUEST ['bid']);
            break;

        //跳转登录页面
        default :
            $smarty->display("admin/login.html");
    }
} else {
    $smarty->display("admin/login.html");
}
/*function exists($pvalue,$class){
    $str=null;
    switch($class){
        case "数字":
            is_numeric($pvalue)?true:jsalert('请输入数字');
        //case ""
    }
}

function jsalert($_s){
    echo "<script type='javascript'>alert('"+$_s+"');</script>";
}*/
/*
 * 判断是否登陆
 */
//if (empty ( $_SESSION ['admin'] )) {
//	$smarty->display ( "admin/login.html" );
//
//} else {
//	$smarty->display ( "admin/index.html" );
//}


function exitscontrol($value, $mes) {
	if (empty ( $value )) {
		echo "<script type='text/javascript'>alert('" + $mes + "'不能为空，请输入！);window.history.go(-1);</script>";
		exit ();
	}
}
?>
