<?php
// Autoload requires classes on new class()
function __autoload($class_name)
{
	$pfad = CL_ROOT . "/include/class." . $class_name . ".php";
	if (file_exists($pfad))
	{
		require_once($pfad);
	}
	else
	{
		die("<b>Fatal Error. Class $class_name could not be located.</b>");
	}
}

function chkproject($user, $project)
{
	$sel = @mysql_query("SELECT ID FROM projekte_assigned WHERE projekt = $project AND user = $user");
	$chk = @mysql_fetch_row($sel);
	$chk = $chk[0];

	if ($chk != "")
	{
		return true;
	}
	else
	{
		return false;
	}
}

function getAvailableLanguages()
{
	$dir = scandir("./language/");
	$languages = array();

	foreach($dir as $folder)
	{
		if ($folder != "." and $folder != "..")
		{
			array_push($languages, $folder);
		}
	}
	if (!empty($languages))
	{
		return $languages;
	}
	else
	{
		return false;
	}
}

function countLanguageStrings($locale)
{
	$langfile = file("./language/$locale/lng.conf");
	$cou1 = (int) 0;
	$cou2 = (int) 0;

	foreach($langfile as $lang)
	{
		if (strstr($lang, "="))
		{
			$cou1 = $cou1 + 1;
			$slang = explode("=", $lang);
			if (trim($slang[1]) != "")
			{
				$cou2 = $cou2 + 1;
			}
		}
	}

	if ($cou1 > 0 and $cou2 > 0)
	{
		$proz = $cou2 / $cou1 * 100;
		return floor($proz);
	}
	else
	{
		return 0;
	}
}

function readLangfile($locale)
{
	$langfile = file("./language/$locale/lng.conf");
	$langkeys = array();
	$langvalues = array();
	foreach($langfile as $lang)
	{
		if (strstr($lang, "="))
		{
			$slang = explode("=", $lang);
			array_push($langkeys, trim($slang[0]));
			array_push($langvalues, trim($slang[1]));
		}
	}
	$langfile = array_combine($langkeys, $langvalues);
	if (!empty($langfile))
	{
		return $langfile;
	}
	else
	{
		return false;
	}
}

function detectSSL()
{
	if (getArrayVal($_SERVER, "https") == "on")
	{
		return true;
	} elseif (getArrayVal($_SERVER, "https") == 1)
	{
		return true;
	} elseif (getArrayVal($_SERVER, "SERVER_PORT") == 443)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function getMyUrl()
{
	if (isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI'])){
		$requri = $_SERVER['REQUEST_URI'];
	}
	else {
		// assume IIS
		$requri = $_SERVER['SCRIPT_NAME'];
		if (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) {
			$requri .= '?' . $_SERVER['QUERY_STRING'];
		}
	}
	$host = $_SERVER['HTTP_HOST'];
	$pos1 = strrpos($requri, "/");
	$requri = substr($requri, 0, $pos1 + 1);
	if (detectSSL())
	{
		$host = "https://" . $host;
	}
	else
	{
		$host = "http://" . $host;
	}
	$url = $host . $requri;

	return $url;
}

function getArrayVal(array $array, $name)
{
	if (array_key_exists($name, $array))
	{
		return $array[$name];
	}
	else
	{
		return false;
	}
}
function delete_directory($dirname)
{
	if (is_dir($dirname))
	{
		$dir_handle = opendir($dirname);
	}
	if (!$dir_handle)
	{
		return false;
	}
	while ($file = readdir($dir_handle))
	{
		if ($file != "." && $file != "..")
		{
			if (!is_dir($dirname . "/" . $file))
			{
				unlink($dirname . "/" . $file);
			}
			else
			{
				delete_directory($dirname . '/' . $file);
			}
		}
	}
	closedir($dir_handle);
	rmdir($dirname);
	return true;
}

function reduceArray(array $arr)
{
	$num = count($arr);
	$earr = array();
	for($i = 0;$i < $num;$i++)
	{
		if (!empty($arr[$i]))
		{
			$earr = array_merge($earr, $arr[$i]);
		}
	}
	return $earr;
}

function showUserInfo($uid,$isDetail){

	$user= new user();

	$userProfile = $user->getProfile($uid);

	$screenName = $userProfile[screenname];
	
	$location =$userProfile[Location];
	
	$aboutMe =$userProfile[AboutMe];
	
	$realname = $userProfile[realname];
	$usertype=$userProfile[UserType];
	
	$usertrainterests = new usertrainterests();
	
	$interests=$usertrainterests->get_utinterests($uid);
	$ttest="onerror=\"this.style.display='none'\"";
	$test="<td width='200'>";
	global $travel_interests;
	if(is_array($interests)){
		foreach($interests as $interest)
		{
			$tra_id = $interest["TravelInterestId"];
			$tra_name = $travel_interests[$tra_id];
			$test.="<a title='$tra_name'><img src='templates/images/interests/offer-".$interest["TravelInterestId"].".jpg' width='30px' height='30px' ".$ttest."/></a>";
			//$test.=$tra_name.",";
			$test.="&nbsp;";
		}
	}
	$test.="</td>";

	$imageFile =  $userProfile[ImageFileLocation];
	$state=$userProfile[state];
	if($usertype=="Industry"||$usertype=="Admin")
	{
	 
	 $dest=new destination();
	  $imageFile=$dest->getIndustryLogo($uid);
	  //msg($imageFile);
	  if($imageFile == "" || !file_exists($imageFile))
	  {
	  	$imageFile = "./templates/images/missing_logo1.jpg";
	  }
	}
	else
	{
	  if($imageFile == "" || !file_exists($imageFile))
	 	$imageFile = "./templates/images/user.gif";
	}
	return '<table width="220" border="0" cellspacing="2" cellpadding="5">
      <tr>
        <td ><img src="' .$imageFile. '" alt="img" width="175" height="150"/></td>
      </tr>
      <tr>
        <td><h3>'.($_SESSION["userid"]==$uid?"":"").($userProfile[showrealname]==1? "$realname":"$screenName").'</h3>'.$state.'</td>
      </tr>
      <tr>
	  <td style="font-size:10px; display:none">
	  '.$location.'
	  </td>
	  </tr>
	  <tr><td style="display:'.($interests==""?"none":"block").'"><strong>My Travel Interests</strong></td></tr>
	  <tr>
	  '.$test.'
	  </tr>
	  <tr><td style="display:'.($aboutMe==""?"none":"block").'"><strong>About Me</strong></td></tr>
	  <tr>
	  <td style="font-size:15px; word-break:break-all; word-wrap:break-word">
	 '.$aboutMe.'
	  </td></tr>
      <tr>
        <td>
		</td>
      </tr>
     
    </table>';
}

function showIndustryInfo($industryObj,$isObjExist){	
	$addreview="&nbsp;&nbsp;<a class='ovalbutton' href='javascript:addReview();'><span>ADD REVIEW</span></a>";
	return '<table width="220" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td><img src="'.($industryObj["logoImageFileLocation"]==""?'templates/images/missing_logo1.jpg':$industryObj["logoImageFileLocation"]).'" alt="img" width="175"  height="135"/></td>
      </tr>
  
      
	   <tr>
        <td> <div id="des_rating_'.$industryObj["Id"].'"></div> <script>
				'.'$'.'("#des_rating_'.$industryObj["Id"].'").rater(null , {maxvalue:5,curvalue:'.$industryObj["rate"].',enabled:false});
			</script> &nbsp;&nbsp;<a class="ovalbutton" href="javascript:readReview('.$industryObj["Id"].');"><span>READ REVIEWS</span></a>
			'.(($_SESSION["userid"]!=0&&$_SESSION["UserType"]!="Industry"&&$_SESSION["UserType"]!="Admin")?"$addreview":"").'
			</td>
      </tr>
	   <tr>
        <td align="left">'.$industryObj["fansNum"].' Fans &nbsp;&nbsp;<a style="'.($isObjExist==1&&$_SESSION["userid"]>0&&$_SESSION["UserType"]=="Member"?"display:block;":"display:none;").'" class="ovalbutton" href="industry.php?q=preview&action=add&desId='.$industryObj["Id"].'"><span>ADD TO FAVORITES</span></a></td>
      </tr>
    </table>';
}

function showTourInfo($tourinfo)
{
	$interests=$tourinfo["interest"]["TravelInterestId"];
	$ttest="onerror=\"this.style.display='none'\"";
	$test1="<td width='200'>";
	global $tour_details;
	foreach($interests as $interest)
	{
		//$tour_int_id = $interest["TravelInterestId"];
		$test1.="<a title='$tour_details[$interest]'><img src='templates/images/types/offer-".$interest.".jpg' width='30px' height='30px' ".$ttest."/></a>";
		//$test1.=$tour_details[$interest].",";
		$test1.="&nbsp;";
	}
	$test1.="</td>";
	$interests=$tourinfo["interest"];
	$test2="<td align='center'>";
	foreach($interests as $interest)
	{
		$test2.="<strong><font color='black'>".$interest["tname"]."</font></strong>";
		$test2.="<br/>";
	}
	$test2.="</td>";
	if($tourinfo["UserType"]!="Industry"&&$tourinfo["UserType"]!="Admin"&&$_SESSION["UserType"]!="Industry"&&$_SESSION["UserType"]!="Admin")
	$test3='<a style="text-decoration:underline" href="user.php?q=preview&id='.$tourinfo["userId"].'">'.($tourinfo["showRealname"]!=1?$tourinfo["LogonAlias"]:$tourinfo["realname"]).'</a>';
	else
	$test3=($tourinfo["showRealname"]!=1?$tourinfo["LogonAlias"]:$tourinfo["realname"]);
	return '<table width="220" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td><img src="'.($tourinfo["ImageFileLocation"]).'" alt="img" width="175" height="150" /></td>
      </tr>
  
      <tr>
        <td><strong><font size="3">This Tour was Created by '.$test3.'</font></strong></td>
      </tr>
      
      <tr>
        <td align="center"><strong><font size="3">'.($tourinfo["Name"]).'</font></strong></td>
      </tr>
      
      <tr>
	  '.$test1.'
	  </tr>
	  
	  <tr>
	  '.$test2.'
	  </tr>
	  
    </table>';
}

function chkSession($rederectUrl){
	if(intval($_SESSION["userid"])==0){
		header("Location:".$rederectUrl);
		exit;
	}
}

function chkIndustry($rederectUrl){
	if(!isset($_SESSION["UserType"])){
		header("Location:".$rederectUrl);
		exit;
	}
	
	if($_SESSION["UserType"]!="Industry" && $_SESSION["UserType"]!="Admin"){
		header("Location:".$rederectUrl);
		exit;
	}
}

function msg($content){
	echo "<script>alert('$content');</script>";
}

function url_go($url){
	echo "<script>window.location='$url';</script>";
}


// string format: yyyy-mm-dd
function str2time($str){
	$t = explode("-",$str);
	return mktime(0,0,0,$t[1],$t[2],$t[0]);
}

function sqlreplace($str) {
	$strResult = $str;
	if (get_magic_quotes_gpc ()){
		$strResult = stripslashes ( $strResult ); //转换sql语句特殊字符
	}
	return $strResult;
}

function SetSlideShow($Images,$template)
{
	$imageCount = 0;
	
	$i=0;
    foreach($Images as $value)
    {
    	if($i<5)
			$imageCount = ($value == "") ? $imageCount : $imageCount+1;
		$i++;
    }
			
	$ImagesInfo = "";
	if($imageCount == 0)
	{
		$template->assign("haveImages",false);
	}
	else
	{
		$template->assign("haveImages",true);
			
		if($imageCount != 1)
		{
			$template->assign("MultiImage",true);
			$ImagesInfo = "<script type='text/javascript'>
					var img1 = '" . $Images[0] . "';
					var img2 = '" . $Images[1] . "';
					var img3 = '" . $Images[2] . "';
					var img4 = '" . $Images[3] . "';
					var img5 = '" . $Images[4] . "';
					var imglk1 = '" . $Images[5] . "';
					var imglk2 = '" . $Images[6] . "';
					var imglk3 = '" . $Images[7] . "';
					var imglk4 = '" . $Images[8] . "';
					var imglk5 = '" . $Images[9] . "';
					var slideCount =".($imageCount).";
					</script>";
		}
		else
		{
			$template->assign("MultiImage",false);
			$ImagesInfo = '<img height="353" width="969" src="'.$Images[0] .'"/>';
		}
	}

	$template->assign("ImagesInfo",$ImagesInfo);
}

?>