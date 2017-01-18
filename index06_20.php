<?php
   header("Context-type:text/html;charset=utf-8");
include_once 'ini.php';
include_once 'include/class.news.php';
include_once 'include/member.php';
require_once("include/PHPMailer_v5.1/class.phpmailer.php");
include("include/PHPMailer_v5.1/class.smtp.php");
include_once 'include/class.classes.php';
include_once 'include/interface.iDataBase.php';
global $smarty;
error_reporting(0);
$_f = new news ();
$iuser = new member();
$iclass= new classes();


switch($_REQUEST['action']){
     case "content":
        //right
        righttool();
        //menu
        menu();
        type();
        sessionlife();

         if(!empty($_GET['_p'])){
            $result = $_f->getByid($_GET['_p']);
            //$_f->clickcount($result[0]['n_clickcount'],$result[0]['n_id']);
            $smarty->assign("text",$result);
         }
        if(!empty($_GET['_c'])){
        $smarty->assign("title",$_GET['_c']);
        }

        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
        $result2=$_f->_GetAllNew("",1,1," n_site='C'",15);
        $smarty->assign("dlist",$result2);    
        $smarty->assign("list",$array);
        $smarty->display("content.html");
        break;
     case "content1":
        //right
        righttool();
        //menu
        menu();
        type();
        sessionlife();

         if(!empty($_GET['_p'])){
            $result = $_f->getByid($_GET['_p']);
            //$_f->clickcount($result[0]['n_clickcount'],$result[0]['n_id']);
            $smarty->assign("text",$result);
         }
        if(!empty($_GET['_c'])){
        $smarty->assign("title",$_GET['_c']);
        }

        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
        $result2=$_f->_GetAllNew("",1,1," n_site='C'",15);
        $smarty->assign("dlist",$result2);    
        $smarty->assign("list",$array);
         $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
          fck ();  
		$class = $iclass->GetAllCalss ( " and c_status=1" );
		$smarty->assign ( "class", $class );
        $smarty->display("hongban/page.html");
        break;
    	
    case "list":
        sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p="";
        if(!empty($_GET["cid"])){
            $_p .=" and n_class like '%" .$_GET["cid"]. "%' and n_status=1";
        }
            
        if(!empty($_GET["sid"])){
            $_p .=" and n_subclass like '%" .$_GET["sid"]. "%' and n_status=1";
        }

        if(!empty($_GET['keyword'])){
             $_p .=" and n_keyword like '%".$_GET["keyword"]."%' and n_status=1";
        }

        if(!empty($_GET['name'])){
               $smarty->assign("name",$_GET['name']);
        }else{
               $smarty->assign("name","All");
        }
        $result=$_f->_GetAllNewByID($_p);

        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
        $smarty->assign("list",$result);
        $smarty->display("list.html");
        break;
     case "list1":
        sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p="";
        if(!empty($_GET["cid"])){
            $_p .=" and n_class like '%" .$_GET["cid"]. "%' and n_status=1";
        }
            
        if(!empty($_GET["sid"])){
        	if($_GET["sid"] <10)
            $_p .=" and n_subclass = " .$_GET["sid"]. " and n_status=1";
        }
 		if(!empty($_GET["sid"])){
        	if($_GET["sid"] >9)
            $_p .=" and n_subclass like '%" .$_GET["sid"]. "%' and n_status=1";
        }

        if(!empty($_GET['keyword'])){
             $_p .=" and n_keyword like '%".$_GET["keyword"]."%' and n_status=1";
        }

        if(!empty($_GET['name'])){
               $smarty->assign("name",$_GET['name']);
        }else{
               $smarty->assign("name","All");
        }
        $result=$_f->_GetAllNewByID($_p);
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
		
        $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        $smarty->assign("list",$result);
          fck ();  
		$class = $iclass->GetAllCalss ( " and c_status=1" );
		$smarty->assign ( "class", $class );
        $smarty->display("hongban/list2.html");
        break;
     case "indexx_list":
        sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p="";
			if (!empty($_GET["n_class"])) {
                $_p.=" and n_class like '%" . $_GET["n_class"] . "%'";	
            }
			if (!empty($_GET["n_ctype"]) ) {
				if($_GET["n_ctype"] <10)
                	$_p.=" and n_subclass = " . $_GET["n_ctype"] . "";	
            }
            if (!empty($_GET["n_ctype"]) ) {
				if($_GET["n_ctype"] >9)
                	$_p.=" and n_subclass like '%" . $_GET["n_ctype"] . "%'";	
            }
			if(!empty($_GET['search'])){
                $_p .=" and n_title like '%".trim($_GET['search'])."%' or n_context like '%".trim($_GET['search'])."%' or  n_detail like '%".trim($_GET['search'])."%' or n_keyword like '%".trim($_GET['search'])."%'";
            }
            $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
        $result=$_f->_GetAllNewByID($_p);
           $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        $smarty->assign("list",$result);
        $smarty->display("hongban/list2_type.html");
        break;
     case "hotnews":
     	sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p=" and n_title like '%富士%' or n_context like '%富士%' or n_detail like '%富士%' or n_keyword like '%富士%'";
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
         $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        $result=$_f->_GetAllNewByID($_p);
        $smarty->assign("list",$result);
        $smarty->display("hongban/list2_hotnews.html");
     	break;
     case "hotnews_1":
     	sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p=" and n_title like '%IPv6%' or n_context like '%IPv6%' or n_detail like '%IPv6%' or n_keyword like '%IPv6%'";
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
         $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        $result=$_f->_GetAllNewByID($_p);
        $smarty->assign("list",$result);
        $smarty->display("hongban/list2_hotnews_1.html");
     	break;
     case "hotnews_2":
     	sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p=" and n_title like '%自動車%' or n_context like '%自動車%' or n_detail like '%自動車%' or n_keyword like '%自動車%'";
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
         $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        $result=$_f->_GetAllNewByID($_p);
        $smarty->assign("list",$result);
        $smarty->display("hongban/list2_hotnews_2.html");
     	break;
     case "indexx_list_a":
        sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p=" and n_site='A'";
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
         $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        $result=$_f->_GetAllNewByID($_p);
        $smarty->assign("list",$result);
        $smarty->display("hongban/list2_a.html");
        break; 
   
	case "indexx_list_b":
        sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p=" and n_site='B'";
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
        $result=$_f->_GetAllNewByID($_p);
         $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        $smarty->assign("list",$result);
        $smarty->display("hongban/list2_b.html");
        break;
	case "indexx_list_c":
        sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p=" and n_site='C'";
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
        $result=$_f->_GetAllNewByID($_p);
         $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        $smarty->assign("list",$result);
        $smarty->display("hongban/list2.html");
        break;
	case "indexx_list_d":
        sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p=" and n_site='D'";
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
        $result=$_f->_GetAllNewByID($_p);
         $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        $smarty->assign("list",$result);
        $smarty->display("hongban/list2_d.html");
        break;
 	case "indexx_list_e":
        sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p=" and n_site='E'";
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
        $result=$_f->_GetAllNewByID($_p);
         $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        $smarty->assign("list",$result);
        $smarty->display("hongban/list2_e.html");
        break; 
   	case "indexx_list_f":
        sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p=" and n_site='F'";
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
        $result=$_f->_GetAllNewByID($_p);
         $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        $smarty->assign("list",$result);
        $smarty->display("hongban/list2_f.html");
        break; 
    case "indexx_list_new":
        sessionlife();
        righttool();
        //menu
        menu();
        type();
        $_p="";
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
        $result=$_f->_GetAllNewByID($_p);
         $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        $smarty->assign("list",$result);
        $smarty->display("hongban/list2_new.html");
        break;              
    case "login":
         menu();
         type();
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);

        $smarty->display("login.html");
        break;
     case "login1":
         menu();
         type();
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
		  fck ();  
		$class = $iclass->GetAllCalss ( " and c_status=1" );
		$smarty->assign ( "class", $class );
        $smarty->display("hongban/login.html");
        break;
    case "cidian":
         menu();
         type();
        $smarty->display("disc/cidian_1.html");
        break;
   case "loadType" :
			header ( "Context-type:text/html;charset=utf-8" );
			$result = $iclass->GetStyle ( " and t_classid=" . $_GET ['cid'] );
			$str = "
               <select class='inp ipt-normal' id='n_ctype' name='n_ctype' style='height:18px; width:97px;border:1px solid #CCCCCC;float;left;font-family:MS Gothic'>
               <option value='0'>選んでください</option>";
			for($y = 0; $y < count ( $result ); $y ++) {
				if (! empty ( $_GET ['sid'] )) {
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
    case "list_bigpic":
    	 menu();
         type();
    	$class = $iclass->GetAllCalss ( " and c_status=1" );
		$smarty->assign ( "class", $class );
		$top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
    	$result2=$_f->_GetAllNewbig("","","","C");//広告・販促 AD & SP
        $smarty->assign("dlist",$result2);
    	 $smarty->display("hongban/list-pic2.html");
    	break;
    case "list_smallpic":
    	 menu();
         type();
    	$class = $iclass->GetAllCalss ( " and c_status=1" );
		$smarty->assign ( "class", $class );
		$top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
    	$result2=$_f->_GetAllNewbig("","","","C");//広告・販促 AD & SP
        $smarty->assign("dlist",$result2);
    	 $smarty->display("hongban/list-pic3.html");
    	break;
    case "indexx":
       $result=$_f->_GetAllNew("",1,1," n_site='A'",5);//企業動向 Company & Brand
        $smarty->assign("list",$result);
//         //内容中间上面
        $result1=$_f->_GetAllNew("",1,1," n_site='B'",3);//業界最前線 Front
        $smarty->assign("flist",$result1);
        $result11=$_f->_GetAllNewbig("",1,1,"B",1);//業界最前線 Front
        $smarty->assign("f1list",$result11);
        //内容中间
        $result2=$_f->_GetAllNewbig("",1,1,"C",6);//広告・販促 AD & SP
        $smarty->assign("dlist",$result2);
        //内容底部
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",3);//焦点 China Now
        $smarty->assign("clist",$result3);
        
        $result4=$_f->_GetAllNew("",1,1," n_site='E'",6);//レポート Report
        $smarty->assign("rflist",$result4);   
        
        $result5=$_f->_GetAllNew("",1,1," n_site='F'",5);//イベント Event
        $smarty->assign("fflist",$result5); 
        fck ();  
		$class = $iclass->GetAllCalss ( " and c_status=1" );
		$smarty->assign ( "class", $class );
        $result5=$_f->_GetAllNew("",1,1,"",8);//ALL
        $smarty->assign("zuilist",$result5);  
        sessionlife();
        //menu
        menu();
        type();

        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
                
        $smarty->register_function("date", "switchTime");
        $smarty->display("hongban/index.html");
        break;
	case "aboutus":
	     menu();
         type();
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
	    $smarty->display("aboutus.html");
        break;
	break;
	case "aboutus1":
	     menu();
         type();
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
	    $smarty->display("hongban/about1.html");
        break;
	break;
	case "page":
	     menu();
         type();
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
	    $smarty->display($_REQUEST['return'].".html");	
	break;
	case "page1":
	     menu();
         type();
        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
	    $smarty->display("hongban/".$_REQUEST['return'].".html");	
	break;
	
    case "userlogin":
        $result=$iuser->Get(" and u_email='".$_POST['username']."' and u_pwd='".$_POST['password']."'  and u_status=1");
        if(!empty($result[0]['u_id'])){
            $_SESSION['user'] =$result;
            echo " <script type='text/javascript'>  window.location='index.php?action=index'; </script>";
        }else{
            echo " <script type='text/javascript'> alert('Login Failed,please login'); window.location='index.php?action=login'; </script>";
        }

        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
        break;
    case "userlogin1":
        $result=$iuser->Get(" and u_email='".$_POST['username']."' and u_pwd='".$_POST['password']."'  and u_status=1");
        if(!empty($result[0]['u_id'])){
            $_SESSION['user'] =$result;
            echo " <script type='text/javascript'>  window.location='index.php?action=indexx'; </script>";
        }else{
            echo " <script type='text/javascript'> alert('Login Failed,please login'); window.location='index.php?action=login1'; </script>";
        }

        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
        break;
    case "rege":
        jsalert($_POST['u_uname'],"username not empty,please input");
        jsalert($_POST['u_pwd'],"password not empty,please input");
        if(jsalert($_POST['u_phone'],"phone number not empty,please input")){
            if(!preg_match("/^13[0-9]{1}[0-9]{8}/",$_POST['u_phone'])){
                jsalert("","please input phone number format");
            }
        }
        if(jsalert($_POST['u_email'],"Email not empty，please input")){
//            if(!preg_grep("/^([a-z0-9])*@([a-z0-9]*[-_]?[a-z0-9]+)?/i",$_POST['u_email'])){
//                  jsalert("","请输入正确邮箱格式");
//            }
        }
        $rand = mt_rand(1111111111, 9999999999);
        $rand .= date("Ymdhis");
        $result = $iuser->Add($_POST,$rand);

       $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
            
        if(!empty($result)){
            mailtool($result,$rand,trim($_POST['u_email']));
            $arr = array();
            array_push($arr,$_POST);
            echo " <script type='text/javascript'> alert('successfully，please Validate Email！！！');window.location='index.php?action=login';  </script>";
        }else{
             header("location:/index.php?action=login");
        }
        break;
    case "rege1":
        jsalert($_POST['u_uname'],"username not empty,please input");
        jsalert($_POST['u_pwd'],"password not empty,please input");
        if(jsalert($_POST['u_phone'],"phone number not empty,please input")){
            if(!preg_match("/^13[0-9]{1}[0-9]{8}/",$_POST['u_phone'])){
                jsalert("","please input phone number format");
            }
        }
        if(jsalert($_POST['u_email'],"Email not empty，please input")){
//            if(!preg_grep("/^([a-z0-9])*@([a-z0-9]*[-_]?[a-z0-9]+)?/i",$_POST['u_email'])){
//                  jsalert("","请输入正确邮箱格式");
//            }
        }
        $rand = mt_rand(1111111111, 9999999999);
        $rand .= date("Ymdhis");
        $result = $iuser->Add($_POST,$rand);

       $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
            
        if(!empty($result)){
            mailtool($result,$rand,trim($_POST['u_email']));
            $arr = array();
            array_push($arr,$_POST);
            echo " <script type='text/javascript'> alert('successfully，please Validate Email！！！');window.location='index.php?action=login1';  </script>";
        }else{
             header("location:/index.php?action=login1");
        }
        break;
    case "exit":
        unset($_SESSION['user']);
         echo " <script type='text/javascript'>  window.location='index.php?action=indexx'; </script>";
        break;
    case "confirmation":
        //验证用户
        $result=$iuser->UpdateStatus($_REQUEST,$_REQUEST['_p']);
        if($result){
              echo " <script type='text/javascript'> alert('successfully！！！'); window.location='index.php?action=login'; </script>";
        }else{
             echo " <script type='text/javascript'> alert('Failed！！！'); window.location='index.php?action=login'; </script>";
        }
        break;
    case "vip":
    	if(!empty($_POST['read'])){
    		vipmail($_POST);
    		  echo " <script type='text/javascript'> alert('successfully！！！'); window.location='index.php?action=index'; </script>";
    	}else{
    		jsalert("","会員規約 not empty!please click");
    	}
    	
    	break;
    case "vip1":
    	if(!empty($_POST['read'])){
    		vipmail($_POST);
    		  echo " <script type='text/javascript'> alert('successfully！！！'); window.location='index.php?action=indexx'; </script>";
    	}else{
    		jsalert("","会員規約 not empty!please click");
    	}
    	
    	break;

    default: 
        //内容左侧

        $result=$_f->_GetAllNew("",1,1," n_site='A'",20);
        $smarty->assign("list",$result);
//         //内容中间上面
        $result1=$_f->_GetAllNew("",1,1," n_site='B'",8);
        $smarty->assign("flist",$result1);
        //内容中间
        $result2=$_f->_GetAllNew("",1,1," n_site='C'",15);
        $smarty->assign("dlist",$result2);
        //内容底部
        $result3=$_f->_GetAllNew("",1,1," n_site='D'",8);
        $smarty->assign("clist",$result3);
        
        $result4=$_f->_GetAllNew("",1,1," n_site='E'",15);
        $smarty->assign("rflist",$result4);   
        
        $result5=$_f->_GetAllNew("",1,1," n_site='F'",15);
        $smarty->assign("fflist",$result5);        
        sessionlife();
        //right
        righttool();
        //menu
        menu();
        type();

        $top=$_f->GetKeyByTop10();
        $smarty->assign("top",$top);
                
        $smarty->register_function("date", "switchTime");
        $smarty->display("index.html");
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
            $body = "Hi,  <br/>Your Shanghaitimes Account has been successfully created.<br/> Please activate your account by visiting link below: <br/> http://www.shanghaitimes.net/index.php?action=confirmation&_p=$uid&_r=$rand";
            $body.="<br/><br/>Thank you for using Shanghaitimes!";
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
            $mail->AddAddress("zhu@projectshanghai.com");
            $mail->From=mail_access;
            $mail->IsHTML(true);
            $mail->FromName="shanghaitimes";
            $mail->Subject = "申请vip会员";
            $body = "name：".$array['name']."<br/>";
            $body .= "company：".$array['company']."<br/>";
            $body .= "telephone：".$array['telephone']."<br/>";
            $body .= "mobile：".$array['mobile']."<br/>";
            $body .= "email：".$array['email']."<br/>";
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