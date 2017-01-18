﻿<?php
session_start ();


/*
 *smarty系统配置 
 * by falcon
 */
require 'smarty/Smarty.class.php';
require 'include/Public/FCKeditor/fckeditor.php';
$smarty = new Smarty (); //建立smarty实例对象$smarty
$smarty->config_dir = "smarty/Config_File.class.php"; // 目录变量
$smarty->caching = false; //是否使用缓存，项目在调试期间，不建议启用缓存
$smarty->template_dir = "templates"; //设置模板目录
$smarty->compile_dir = "templates_c"; //设置编译目录
$smarty->cache_dir = "smarty_cache"; //缓存文件夹
$smarty->caching = false; //开启缓存，为flase的时候缓存无效
$smarty->cache_lifetime = 60;
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";
/*
 * FCK配置文件
 */
function fck($value=null){
global $smarty;
$editor = new FCKeditor("com");

$editor->Width='780';//设置编辑器实际需要的宽度。此项省略的话，会使用默认的宽度。

$editor->Height='400';//设置编辑器实际需要的高度。此项省略的话，会使用默认的高度。

$editor->Value = $value;

$html=$editor->Createhtml();

$smarty->assign("fck",$html);
    
}
//网站路径
$site = "http://www.shanghaitimes.net";
//素材路径
$smarty->assign("calendar",$site."/templates/Content/Calendar/");
$smarty->assign("public",$site."/templates/Content/");
$smarty->assign("ipath",$site."/include/Public/Upload/");
//数据库配置
$db_name = "sales_project";
$db_user = "zhang";
$db_pass = "rg1234";
include_once 'include/class.datenbank.php';

//邮箱setting
define("mail_access","projectshanghai@projectshanghai.com");
define("mail_pass","a888888");
define("mail_port","25");
define("mail_server","mail.projectshanghai.com");



function substring($params){
    extract($params);
    trim($str);
    $str = mb_substr($str, 0,$end,'utf-8');
    if(strlen($str)>$end){
     $str.='...';
    }
    return $str;
}
$smarty->register_function("substr", "substring");

?>