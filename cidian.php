<?php
header("Context-type:text/html;charset=utf-8");
include_once 'ini.php';
include_once 'include/class.news.php';
include_once 'include/member.php';
require_once("include/PHPMailer_v5.1/class.phpmailer.php");
include("include/PHPMailer_v5.1/class.smtp.php");
include_once 'include/class.classes.php';
include_once 'include/interface.iDataBase.php';
include_once 'include/class.cidian.php';
include_once 'include/class.brand.php';


global $smarty;
error_reporting(0);

$cidian = new Cidian ();
$brand = new Brand();


switch($_REQUEST['action']){
  	case "Cidian_List" :
            header("Context-type:text/html;charset=utf-8");
            $p = "";
            if (!empty($_GET["searchdic"])) {
                $p.=" and b_cname like '%" . $_GET["searchdic"] . "%'";
            }
			else
			{
				 header("location:/index.php?action=cidian");
			}

            $result = $brand->getBrands_disc($p);
            $smarty->assign("flist",$result);
            //$result1 = $brand->GetNewnews_japan();
            //$smarty->assign("flist1",$result1);
            $smarty->display("disc/cidian_list.html");		
			break;
		case "Cidian_List1" :
            header("Context-type:text/html;charset=utf-8");
            $p = "";
            if (!empty($_GET["searchdic"])) {
                $p.=" and b_jname like '%" . $_GET["searchdic"] . "%'";

            }
			else
			{
				 header("location:/index.php?action=cidian");
			}
            //$sql = "";
            //if(!empty($_GET['search'])){
               // $sql .=" and n_title like '%" . $_GET["searchdic"] . "%'";
           // }

            $result = $brand->getBrands_disc($p);
            $smarty->assign("flist",$result);
            $result1 = $brand->GetNewnews_japan();
            $smarty->assign("flist1",$result1);
            $smarty->display("disc/cidian.html");		
			break;
	case "Cidian_List_japan" :
            header("Context-type:text/html;charset=utf-8");
            $p = "";
            if (!empty($_GET["searchdic1"])) {
                $p.=" and b_jname like '%" . $_GET["searchdic1"] . "%'";

            }
			else
			{
				 header("location:/index.php?action=cidian");
			}
            $result = $brand->getBrands_disc_china($p);
            $smarty->assign("flist",$result);
            //$result1 = $brand->GetNewnews();
            //$smarty->assign("flist1",$result1);
            $smarty->display("disc/cidian_list_japan.html");		
			break;
	case "Cidian_List_japan1" :
            header("Context-type:text/html;charset=utf-8");
            $p = "";
            if (!empty($_GET["searchdic1"])) {
                $p.=" and b_cname like '%" . $_GET["searchdic1"] . "%'";

            }
			else
			{
				 header("location:/index.php?action=cidian");
			}
            $result = $brand->getBrands_disc_china($p);
            $smarty->assign("flist",$result);
            $result1 = $brand->GetNewnews();
            $smarty->assign("flist1",$result1);
            $smarty->display("disc/cidian_japan.html");		
			break;
	
}

?>