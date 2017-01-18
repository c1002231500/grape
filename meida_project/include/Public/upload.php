<?php
class img {
	private $fileType;

	public function __construct(){
		$this->fileType=array("image/png"=>"png","image/jpeg"=>"jpg",
	"image/x-png"=>"png","image/pjpeg"=>"jpg","image/gif"=>"gif");//文件类型数组
	}

	public function upLoad($formName,$upLoadDir,$size){//图片上传方法
		//参数说说：表单文件域名字，上传路径，控制大小KB  是否生成小图

		if (!file_exists($upLoadDir)){
			echo("<script>alert('请确认图片上传路径是否存在再上传图片！');history.go(-1);</script>");
			exit();
		}
		if ($_FILES["$formName"]["size"]>$size*1000) {//判断 图片字节大小
			echo("<script>alert('图片大小 不能超过".$size."KB');history.go(-1);</script>");
			exit();
		}

		$imgType=$_FILES["$formName"]["type"];//获取文件类型
		if (!array_key_exists($imgType,$this->fileType)){
			echo("<script>alert('图片类型不合法');history.go(-1);</script>");
			exit();
		}

		$filename=time();
        $filepath="";
        if($formName=="n_simgs"){
            $filepath="s".$filename.".".$this->fileType["$imgType"];
        }else{
           $filepath=$filename.".".$this->fileType["$imgType"];
        }
        $imgDir=$upLoadDir.$filepath;

		if (move_uploaded_file($_FILES["$formName"]["tmp_name"],$imgDir)){
			//return $imgDir; 返回路径

            return $filepath;
		}else {
			echo("<script>alert('图片上传失败，请重试！');history.go(-1);</script>");
			exit();
		}
	}
	public function smallPic($sourePic,$width,$heigh,$smallPicDir,$uploadDir){//生成缩略图
		//参数说明 大图地址，生成宽度，高度, 缩略图存放路径
		$BigImg=getimagesize("$uploadDir$sourePic");//获取图像信息
		switch ($BigImg[2]){//判断图像类型
		 case 1:
		 	$image=imagecreatefromgif("$uploadDir$sourePic");//从大图创建GIF图像
		 	break;
		 case 2:
		 	$image=imagecreatefromjpeg("$uploadDir$sourePic");//从大图创建JPG图像
		 	break;
		 case 3:
		 	$image=imagecreatefrompng("$uploadDir$sourePic");//从大图创建PNG图像
		 	break;
		}
		$BigWidth=imagesx($image);//获取大图的宽度
		$BigHeigh=imagesx($image);//获取大图的高度
		$smallPic=imagecreatetruecolor($width,$heigh);//创建一个真彩色的小图
		$smallFileName=substr($sourePic,strrpos($sourePic,"/")+1,strlen($sourePic));//获取文件名
		$smallFileName=$smallPicDir.$smallFileName;//小图存放的完整路径
		imagecopyresized($smallPic,$image,0,0,0,0,$width,$heigh,$BigWidth,$BigHeigh);//从大图复制图像到小图
		imagejpeg($smallPic,$smallFileName);//输出小图到指定的小图路径
		return $smallFileName;//返回小图路径
	}

	public function upLoadAndToSmall($formname,$uploadDir,$size,$SmallWidth,$SmallHeigh,$SmallDir){
		//上传图片并生成缩略图，参数说明：表单名字，上传路径，限制大小KB,缩略图宽度，缩略图宽度，缩略图保存目录
		$fileName=$this->upLoad($formname,$uploadDir,$size);//上传
		//$pic["BigPIC"]=$fileName;
		$smallFileName=$this->smallPic($fileName,$SmallWidth,$SmallHeigh,$SmallDir,$uploadDir);	//生成缩略图
		//$pic["SmallPic"]=$smallFileName;
		return $fileName;//返回大小图的路径数组
	}
}
?>