<?php
	function Upload($definedFileName="",$fileObj,$msg,$imgID,$fileSize,$logoImage)
	{
		
		if(!isset($fileSize) || $fileSize=="")
		$fileSize=2097152;
       //var_dump($fileObj);
       $uploadfile='';
       $uploaddir = "./upload/files/";
       $type=array("jpg","bmp","png","gif");
       $msg='Upload successfully';
       if(!isset($fileObj))
       {
           $msg='Please check your file size';
           return false;
       }else
       {
           $a=strtolower(fileext($fileObj['name']));

           if(!in_array(strtolower(fileext($fileObj['name'])),$type))
             {
                $text=implode(",",$type); 
                $msg= 'You can only upload "jpg","bmp","png","gif" file';
                return false;
             }
           else{
           	if($fileObj['size']>$fileSize){
           		if($logoImage){
           			$msg = 'You can only upload image below 500K';
           			return false;
           		}
           		else{
           		    $msg = 'You can only upload image below 2M ';
           		    return false;
           		}
           	}
            $filename=explode(".",$fileObj['name']);
			if($definedFileName=="")
			{
	            do
	            {
	                $filename[0]=random(10).time(); 
	                $name=implode(".",$filename);
	                $uploadfile=$uploaddir.$name;
	            }while(file_exists($uploadfile));
			}else
			{
				$filename[0]=$definedFileName; 
	            $name=implode(".",$filename);
	            $uploadfile=$uploaddir.$name;
			}
            if (move_uploaded_file($fileObj['tmp_name'],$uploadfile))
            {
            	
            }
            else
            {
            	return false;
                $msg="ERROR".$fileObj['tmp_name'];
            }
           }
       }
	    echo '<script>
	        parent.window.callBackAfterUpload("'.$uploadfile."?r=".time().'","'.$imgID.'");
	        </script>
	    ';
	    return $uploadfile;
	}
   //获取文件后缀名函敄1�7
    function fileext($filename)
    {
        return substr(strrchr($filename, '.'), 1);
    }
   //生成随机文件名函敄1�7
    function random($length)
    {
        $hash = 'C-';
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
        $max = strlen($chars) - 1;
        mt_srand((double)microtime() * 1000000);
            for($i = 0; $i < $length; $i++)
            {
                $hash .= $chars[mt_rand(0, $max)];
            }
        return $hash;
    }

?>
