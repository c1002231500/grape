<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ļ��ϴ�</title>
<link rel="stylesheet" href="css/upload.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/lhgdialog/lhgdialog.min.js"></script>
<script type="text/javascript" src="js/public.js"></script>
<link rel="stylesheet" href="js/swfupload/default.css" type="text/css" />
<script type="text/javascript" src="js/swfupload/swfupload.js"></script>
<script type="text/javascript" src="js/swfupload/swfupload.queue.js"></script>
<script type="text/javascript" src="js/swfupload/fileprogress.js"></script>
<script type="text/javascript" src="js/swfupload/handlers.js"></script>
<script language="javascript" type="text/javascript">
var dg = frameElement.lhgDG;
var swfu;
window.onload = function() {
	var settings = {
		flash_url : "js/swfupload/swfupload.swf",
		upload_url: "http://localhost/study/300yuan/upload.php?action=doupload",
		post_params: {"PHPSESSID" : "<?php echo session_id();?>"},
		file_size_limit : "10 MB",
		file_types : "*.*",
		file_types_description : "All Files",
		file_upload_limit : 10,
		file_queue_limit : 0,
		custom_settings : {
			progressTarget : "fsUploadProgress",
			cancelButtonId : "btnCancel"
		},
		debug: false,

		// Button settings
		button_image_url: "js/swfupload/TestImageNoText_65x29.png",
		button_width: "65",
		button_height: "29",
		button_placeholder_id: "spanButtonPlaceHolder",
		button_text: '<span class="theFont">���</span>',
		button_text_style: ".theFont { font-size: 16; }",
		button_text_left_padding: 12,
		button_text_top_padding: 3,

		file_queued_handler : fileQueued,
		file_queue_error_handler : fileQueueError,
		file_dialog_complete_handler : fileDialogComplete,
		upload_start_handler : uploadStart,
		upload_progress_handler : uploadProgress,
		upload_error_handler : uploadError,
		upload_success_handler : uploadSuccessme,
		upload_complete_handler : uploadComplete,
		queue_complete_handler : queueComplete
	};
	swfu = new SWFUpload(settings);
 };
function uploadSuccessme(file, serverData) {
	var r,re;
	try {
		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setComplete();
		progress.setStatus("Complete.");
		progress.toggleCancel(false);
		//ȡ������˷���ͼƬ·��ֵ
		str = new String(serverData);
		// ����������ʽ����
		pattan = /upload\S+/;
  		r = new String(str.match(pattan));               // ���ַ��� s �в���ƥ�䡣
		re = new String(r.replace(/"\}/,''));
		re = new String(re.replace(/\\/g,''));
        setImg(re);
	} catch (ex) {
		this.debug(ex);
	}
}

function setImg(img)
{
    var str = "<div id=\"imglist\"><img src=\""+img+"\" \/><br \/><input id=\"choseimg\" name=\"choseimg\" type=\"radio\" value=\""+img+"\" onclick=\"choseimg('"+img+"');\" />ѡ��</div>";
    $("#img").append(str);
}
var api = frameElement.api, W = api.opener, D = document;
function choseimg(img)
{
    //W.$("#uploadphoto").val(img);
    W.$("#selectphoto").val(img);
}
	</script>
</head>

<body>
<div id="content">
	<form id="form1" action="index.php" method="post" enctype="multipart/form-data">
		<p>���"���"��ť��ѡ����Ҫ�ϴ����ĵ��ļ���ϵͳ���Զ��ϴ�������ɺ���ʾ����</p>
		<p>�����ϴ����������ļ������ļ���</p>
		<div class="fieldset flash" id="fsUploadProgress">
			<span class="legend">�����ϴ�</span>
	  </div>
		<div id="divStatus">0 ���ļ����ϴ�</div>
			<div>
				<span id="spanButtonPlaceHolder"></span>
			  <input id="btnCancel" type="button" value="ȡ�������ϴ�" onclick="swfu.cancelQueue();" disabled="disabled" style="margin-left: 2px; font-size: 8pt; height: 29px;" />
			</div>
	</form>
</div>
<div id="img">
</div>
</body>
</html>