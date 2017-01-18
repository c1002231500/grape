<?php
if($_POST['submit_post'])
{
    $data = $_POST['p'];
    $pic = $data['selectphoto'];
    $allphoto = $_SESSION['imgpath'];
    //清理掉本次上传图片
    unset($_SESSION['imgpath']);
    //$allphoto = substr($allphoto,0,strlen($allphoto)-1);
    $date = date('Y-m-d H:i:s',time());
    //连接到数据库
    $dblink = $db->connect();
    $sql = "INSERT INTO student (stu_name,stu_age,stu_sex,addtime) values('".$data['stu_name']."','".intval($data['stu_age'])."','".$data['stu_sex']."','".$date."')";
    $dblink->query($sql);
    $insertid = $dblink->get_insert_id();
    //$allphotos = explode('|',$allphoto);
    if(!empty($allphoto))
    {
        foreach($allphoto as $k=>$v){
            $sql = "INSERT INTO student_pic (student_id,pic,isjiaodian) values ('".$insertid."','".$v."',";
            if(trim($v)==trim($pic)){
                $sql .= "'1')";
            }else{
                $sql .= "'0')";
            }
            $dblink->query($sql);
        }
    }
   //echo $dblink->getError();
    $flag = true;
    $msg ="恭喜，您的数据已成功入库。以下是您提交的信息:";
}else{
    $flag = false;
    $msg = "非法提交!";
}

include PATH.DS.'tpl/success.php';