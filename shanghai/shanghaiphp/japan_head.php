<style>
.casing { 
BORDER-BOTTOM: #ded091 1px solid; 
border-top:#ded091 1px solid;
background-color:ffffed;
border-left:#ded091 1px solid;
border-right:#ded091 1px solid;
PADDING-RIGHT: 3px; 
PADDING-LEFT: 3px; 
PADDING-BOTTOM: 2px; 
PADDING-TOP: 5px;
width:60px;
height:18px;
}
</style>

<script language="javascript">
function LoadD()
{
	img4.src="bbjimg/bbson.gif";
}
function UnloadD()
{
	img4.src="bbjimg/bbsoff.gif";

}
function getCookie(str){
	var tmp,reg=new RegExp("(^| )"+str+"=([^;]*)(;|$)","gi");
	if(tmp=reg.exec(document.cookie))return(tmp[2]);
	return null;
	}
</script>

<table width="868" border="0" cellspacing="0" cellpadding="0" align="center" class="text1">
  <tr> 
    <td width="70" height="12"><a href="http://www.bbj365.jp"><img src="bbjimg/logo_1.gif" width="82" height="64" border="0"></a></td>
    <td width="798" valign="top" height="12"> 
      <table width="786" border="0" cellspacing="0" cellpadding="0" class="text1" height="37" align="center">
        <tr> 
          <td class="line3" colspan="2">&nbsp;</td>
        </tr>
        <tr>

	<script>
		if (getCookie("username")!=null)
		{
			document.write ( '<td width="200" height="30" style="padding-left:40px;">���ã�'+getCookie("username")+'</td>');
		}
		else
		{
			s='<form name="form1" method="post" action="checkuser.aspx"> ';
			s+=' <td width="391" height="30" style="padding-left:40px;"> ';
           s+='�û����� <input type="text" name="username" size="12">&nbsp;&nbsp;���룺 <input type="password" name="password" size="12">&nbsp;';
			s+='  <input type="submit" name="Submit" value="��¼"> </td></form>';
			document.write(s);
		}
	</script>
		


          <td width="415" height="30" align="center"> 
            <div align="center"> 
			  <script>
				if (getCookie("username")==null)
				{
					document.write ('<font class="casing"> <a href="http://www.bbj365.cn/reguser.php">��Աע��</a></font>' );
				}
				else
				{
					document.write ('<font class="casing"><a href="logout.aspx">�˳�</a></font>&nbsp;<font class="casing"> <a href="http://www.bbj365.cn/mybbj.php">�ҵ�BBJ</a></font> ');
				}
				</script>
              &nbsp;<font class="casing"><a href="mycart.php">���ﳵ</a></font>&nbsp;<font class="casing"><a href="myfav.php">�ݴ��</a></font>&nbsp;<font class="casing"><a href="mygoods.php">�ҵĶ���</a></font>&nbsp;<font class="casing"><a href="article.php?id=2">����ָ��</a></font> 
            </div>
          </td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><a href="http://www.bbj365.jp"><img src="bbjimg/logo_2.gif" width="131" height="27" border="0"></a></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
