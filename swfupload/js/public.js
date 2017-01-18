// JavaScript Document
/**
弹出上传界面
*/
function showUploadPhoto()
{
	var date = new Date();
	var id = date.getYear()+date.getMonth()+date.getDay()+date.getHours();+date.getMinutes()+date.getSeconds();
	var dg = $.dialog({
			  id:'uploadphoto'+id,
			  title:'上传图片',
			  btnBar:true,
			  cancelBtn:true,
			  cover:true,
			  lock:true,
			  bgcolor: '#ccc',
			  width:800,
			  iconTitle:false,
			  height:600,
			  xButton:true,
			  content: "url:upload.php"
			  });
}