
<?php
   header("Context-type:text/html;charset=utf-8");
include_once 'ini.php';
include_once 'include/class.news.php';
include_once 'include/member.php';
require_once("include/PHPMailer_v5.1/class.phpmailer.php");
include("include/PHPMailer_v5.1/class.smtp.php");
include_once 'include/class.classes.php';
include_once 'include/interface.iDataBase.php';
include_once 'include/class.js.php';
include_once 'include/class.hotkeyword.php';
include_once 'include/class.activity.php';
include_once 'include/class.dynamic.php';

include_once 'include/class.wine.php';
include_once 'include/class.xinwen.php';
include_once 'include/class.contact.php';
$wine = new Wine();
$xinwen=new Xinwen();
global $smarty;
error_reporting(0);
$_f = new news ();
$iuser = new member();
$iclass= new classes();
$js = new Js();
$hotkeyword = new Hotkeyword();

$activity = new Activity ();
$dynamic = new Dynamic();
switch($_REQUEST['action']){
      /*default :
        $result=$activity->getActivity_index();           
        $smarty->assign("list",$result);
        $result_dyn=$dynamic->getDynamic_index();           
        $smarty->assign("dyn",$result_dyn);
        $smarty->display("zgccs/index.html");
        break;*/
	default :
		$xinwen->getxinwen();
		$smarty->display("grape/index.html");
		break;
		
	case "list_wine":
		$p="";
        if(!empty($_GET['year'])){
             $p .=" and w_year = '".$_GET["year"]."'";
			 $p .=" and w_year = '".$_GET["year"]."'";
        }

    	$result=$wine->getWine($p);           
        $smarty->assign("flist",$result);
		$smarty->assign("title",商品列表);
		$smarty->display("grape/list_wine.html");
		break;

	case "wine_detial":
		$p="";
		$result = $wine->getWine ( " and w_id=" . $_GET ['wid'] );
		$smarty->assign("wine",$result);
		$smarty->display("grape/wine_detial.html");
		break;
	case "contact":	
		$smarty->assign("title","联系我们");
		$smarty->display("grape/contact.html");
		break;
	case "blog":	
		$smarty->assign("title","博客");
		fck();
		$result = $xinwen->getXinwen($p);
        $smarty->assign("flist",$result);
		
		$smarty->display("grape/blog.html");
		break;		

   }
//send main
//发送邮件功能
 function mailtool($uid,$rand,$sendmail) {
        header('Content-type:text/html;charset=utf-8');
        $mail = new PHPMailer(); // the true param means it will throw exceptions on errors, which we need to catch
        $mail->IsSMTP(); // telling the class to use SMTP
        try {
            $mail->SMTPDebug = false;        // 改为2可以开启调试
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            $mail->Host = mail_server; // sets the SMTP server
            $mail->Port = mail_port;                 // set the SMTP port for the GMAIL server
            $mail->CharSet = "UTF-8";            // 这里指定字符集！解决中文乱码问题
            $mail->Encoding = "base64";
            $mail->Username = mail_access; // SMTP account username
            $mail->Password = mail_pass;        // SMTP account password
            $mail->AddAddress($sendmail);
            $mail->From=mail_access;
            $mail->IsHTML(true);
            $mail->FromName="shanghaitimes";
            $mail->Subject = "Validate Email";
            $body = "Hi,  <br/>こんにちは<br/>Your Shanghaitimes Account has been successfully created.<br/>お申し込みいただき、誠にありがとうございました。<br/> Please activate your account by visiting link below: <br/> 下のリンクを訪問してアクティブしてください。
            <br/>http://www.shanghaitimes.net/index.php?action=confirmation1&_p=$uid&_r=$rand";
            $body.="<br/><br/>Thank you for using Shanghaitimes!Shanghaitimes<br/>本サービスをご利用していただきありがとうございました。";
            $mail->Body=$body;
            if ($mail->Send()) {
//               echo "success";
//               exit;
            } else {
//                echo "error";
//                exit;
            }
        }catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }
    }
    
    
    //send main
  //发送邮件功能
 function vipmail($array) {
 
        header('Content-type:text/html;charset=utf-8');
        $mail = new PHPMailer(); // the true param means it will throw exceptions on errors, which we need to catch
        $mail->IsSMTP(); // telling the class to use SMTP
        try {
            $mail->SMTPDebug = fase;        // 改为2可以开启调试
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            $mail->Host = mail_server; // sets the SMTP server
            $mail->Port = mail_port;                 // set the SMTP port for the GMAIL server
            $mail->CharSet = "UTF-8";            // 这里指定字符集！解决中文乱码问题
            $mail->Encoding = "base64";
            $mail->Username = mail_access; // SMTP account username
            $mail->Password = mail_pass;        // SMTP account password
            $mail->AddAddress("asiaface@163.com");
            $mail->From=mail_access;
            $mail->IsHTML(true);
            $mail->FromName="zgccs";
            $mail->Subject = "vip";
            $body = "fenlei：".$array['CheckboxGroup1[]']."<br/>";
          	$body = "company：".$array['company']."<br/>";
            $body .= "diqu：".$array['diqu']."<br/>";
            $body .= "dianhua：".$array['dianhua']."<br/>";
            $body .= "chuanzhen：".$array['fex']."<br/>";
            $body .= "dizhi：".$array['address']."<br/>";
            $body .= "lianxiren：".$array['man']."<br/>";
            $body .= "shoujihao：".$array['tel']."<br/>";
            $body .= "lianxineirong：".$array['content']."<br/>";
            $body .= "liuyan：".$array['liuyan']."<br/>";
            $mail->Body=$body;
            if ($mail->Send()) {
//                echo "success";
//                exit;
            } else {
//                echo "error";
//                exit;
            }
        }catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }
    }
    
    
//login
function sessionlife(){
    global $smarty;
    if(!empty($_SESSION['user'])){
        $smarty->assign("username",$_SESSION['user'][0]['u_uname']);
        if(empty($_SESSION['user'][0]['u_level'])){
              $smarty->assign("level",1);
        }else{
              $smarty->assign("level",$_SESSION['user'][0]['u_level']);
        }

    }
}

//right
function righttool(){
      global $smarty;
      global $_f;
       //点击率排行
       $count=$_f->_GetAllNew("",1,1," n_site='F'",15); 
       $smarty->assign("count",$count);
       
        //ad
        $result2=$_f->_GetAllNew("",1,1," n_site='C'",15);
        $smarty->assign("dlist",$result2);  
        $ad=$_f->getnewByp(" and n_status=1  and n_site='E' order by n_id desc limit 15");
        $smarty->assign("ad",$ad);
}

//判断是否为空
function jsalert($control,$val){
    if(empty($control)){
      echo "<script>alert('$val');window.history.go(-1);</script>";
       exit;
    }
    return true;

}

//菜单
function menu(){
      global $smarty;
      global $iclass;
      $class=$iclass->GetAllCalss(" and c_status=1");
      $smarty->assign("class",$class);
}

//小类
function type(){
      global $smarty;
      global $iclass;
      $type=$iclass->GetAllType(" and t_status=1");
      $smarty->assign("type",$type);

}


function switchTime($date){
    try{
        if($date){
            $date=strtotime($date);
            return date('Y/m/d', $date);
        }
    }catch(Exception $e){
        echo $e->getMessage();
        exit();
    }

}

?>