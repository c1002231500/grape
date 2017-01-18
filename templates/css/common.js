
//打开对话框
function OpenDialog(Url,Width,Height)
{
	window.showModalDialog(Url,"","center:yes;help:no;status:no;resizable:no;dialogHeight:"+Height+"px;dialogWidth:"+Width+"px");
}


//选择对话框
function ChooserDialog(url,Height,Width)
{
	var vReturn=window.showModalDialog(url,"","center:yes;help:no;status:no;resizable:no;dialogHeight:"+Height+"px;dialogWidth:"+Width+"px");
	return(vReturn);
}


//查看URL
function ViewUrl(Url,Width,Height)
{
	window.open(Url,"NewPage","height="+Height+",width="+Width+",location=no,menubar=no,resizable=yes,scrollbars=yes,status=no,toolbar=no,top=50,left=50");
}

function goUrl(Url)
{
	window.location.href=Url;
}

   
//在产品主图区域显示附加图片
function ChangeProductPic(PicObjId,NewPic,OldPic,Flag)
{
	var obj=document.getElementById(PicObjId);
	if(Flag) obj.src=NewPic; else obj.src=OldPic;
}

function BrowseServer(control)
{
	var finder = new CKFinder() ;
	finder.BasePath = '/ckfinder/' ;
	finder.SelectFunction = SetUrl ;
	finder.Popup() ;
	if(document.getElementById("CurrentObj")!=null) document.getElementById("CurrentObj").value=control.id;
	
}


//BrowseImage
function SetUrl(url)
{
    document.getElementById("Url").value = url ;
	
	obj = document.getElementById("CurrentObj").value ;
    if (obj) document.getElementById(obj).value=document.getElementById("Url").value;
}


//JS的ltrim函数
function jsltrim(str)
{
    var whitespace = new String(" \t\n\r");
    var s = new String(str);

    if (whitespace.indexOf(s.charAt(0)) != -1)
    {
        var j=0, i = s.length;
        while (j < i && whitespace.indexOf(s.charAt(j)) != -1)
        {
            j++;
        }
        s = s.substring(j, i);
    }
    return s;
}

//ks的rtrim功能
function jsrtrim(str)
{
    var whitespace = new String(" \t\n\r");
    var s = new String(str);

    if (whitespace.indexOf(s.charAt(s.length-1)) != -1)
    {
        var i = s.length - 1;
        while (i >= 0 && whitespace.indexOf(s.charAt(i)) != -1)
        {
            i--;
        }
        s = s.substring(0, i+1);
    }
    return s;
}

//trim功能
function jstrim(str) {return rtrim(ltrim(str));}


// 数值验证
function NumCheck(Obj){
	if(isNaN(Obj.value)){
		Obj.value = "";
		Obj.focus();
	    }
	}
	

//只能输入数字
function JustNum(Obj){
	if (!((event.keyCode>=48)&&(event.keyCode<=57))){
		event.returnValue=false;
		}
	}
	

//跳转菜单
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}


//弹出发送电子邮件窗口
function sendmsgWindow(email){
	window.open('sendmsg.asp?email='+email,'发送电子邮件','width=600,height=300,location=0,menubar=0,resizable=0,scrollbars=0,status=1,toolbar=0')
	}
	
function checkKeyword()
{
	var o=document.getElementById("search");
	if(o.value=="")
	{
		alert("must input keyword!");
		return(false);
	}
	return(true);
}