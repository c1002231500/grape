// user information 
//by falcon.x
charset="utf-8";
	function check_form(){
		var admin_name=document.getElementById("admin_name").value;
		var admin_password=document.getElementById("admin_password").value;
		if(admin_password==""||admin_name==""){
			alert('username or password not empty ');return false;
		}else{
			document.getElementById("admin_password").value=MD5(admin_password);
		}
	}
	window.onload = function(){document.getElementById('admin_name').focus();}