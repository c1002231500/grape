<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���ݱ������</title>
</head>

<body>
<?php echo $msg;?>
<?php if($flag){?>
������<?php echo $data['stu_name'];?><br />
���䣺<?php echo $data['stu_age'];?><br />
�Ա�<?php echo $data['stu_sex'];?><br />
<img src="<?php echo $pic?>" />
<?php }else{ ?>
<?php }?>
<br />
<a href="index.php">����</a>
</body>
</html>