<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����ϴ�����</title>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/lhgdialog/lhgdialog.min.js"></script>
<script type="text/javascript" src="js/public.js"></script>
</head>

<body>
<form id="form1" name="form1" method="post" action="index.php?do=save">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
      <td width="10%">����</td>
      <td width="1%">&nbsp;</td>
      <td width="89%"><input type="text" name="p[stu_name]" id="name" /></td>
    </tr>
    <tr>
      <td width="10%">����</td>
      <td width="1%">&nbsp;</td>
      <td width="89%"><input type="text" name="p[stu_age]" id="name" /></td>
    </tr>
    <tr>
      <td>�Ա�</td>
      <td>&nbsp;</td>
      <td><select name="p[stu_sex]">
        <option value="��">��</option>
        <option value="Ů">Ů</option>
        </select></td>
    </tr>
    <tr>
      <td height="41" colspan="3"><input type="hidden" value="" name="p[selectphoto]" id="selectphoto" />
      <input type="button" name="button" id="button" onclick="showUploadPhoto();" value="�ϴ�ͼƬ" /></td>
    </tr>
    <tr>
      <td colspan="3"><input id="submit_post" name="submit_post" type="submit" value="����" /></td>
    </tr>
  </table>
</form>
</body>
</html>
