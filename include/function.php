<?php
	function chkemail ($email)
	{
		return eregi ('' . '^[_a-z0-9-]+(\\.[_a-z0-9-]+)*@[a-z0-9-]+(\\.[a-z0-9-]+)*$', $email);
	}

	function fun_alert ($string = '')
	{
		if (!empty ($string))
		{
			echo '' . '<script language="javascript">alert(\'' . $string . '\');</script>';
			return true;
		}
		else
		{
			return false;
		}
	}

	function fun_goto ($string = '')
	{
		if (!empty ($string))
		{
			echo '' . '<script language="javascript">this.location=\'' . $string . '\';</script>';
			return true;
		}
		else
		{
			return false;
		}
	}

	function fun_back ()
	{
		echo '<script language="javascript">history.back();</script>';
	}

	function sqlreplace($str){
		$strResult = $str;
		if(!get_magic_quotes_gpc())//判断设置是否开启
		{
			$strResult = addslashes($strResult);//转换sql语句特殊字符
		}
		return $strResult;
	}

	function readfromfile($file_name) {
		if (file_exists($file_name)) { 
			if (PHP_VERSION >= "4.3.0") return file_get_contents($file_name); 
			$filenum=fopen($file_name,"r"); 
			$sizeofit=filesize($file_name); 
			if ($sizeofit<=0) return ''; 
			@flock($filenum,LOCK_EX); 
			$file_data=fread($filenum, $sizeofit); 
			fclose($filenum); 
			return $file_data; 
		} else return ''; 
	} 
	
	function writetofile ($filename, $data) {
		$filenum=@fopen($filename,"w"); 
		if (!$filenum) { 
			return false; 
		} 
		flock($filenum,LOCK_EX); 
		$file_data=fwrite($filenum,$data); 
		fclose($filenum); 
		return true; 
	} 



	//截取字符串  $Short_Str=getShort($str,4);//截取前面4个汉字,结果为:这个字符
	function csubstr($str,$start,$len) 
	{ 
		$strlen=strlen($str); 
		$clen=0; 
		for($i=0;$i<$strlen;$i++,$clen++) 
		{ 
			if ($clen>=$start+$len) 
			break; 
			if(ord(substr($str,$i,1))>0xa0) 
			{ 
				if ($clen>=$start) 
				$tmpstr.=substr($str,$i,2); 
				$i++; 
			} 
			else 
			{ 
				if ($clen>=$start) 
				$tmpstr.=substr($str,$i,1); 
			} 
		}

		return $tmpstr; 
	}

	function getShort($str,$len) 
	{ 
		$tempstr = csubstr($str,0,$len); 
		if ($str<>$tempstr) 
		$tempstr .= "..."; //要以什么结尾,修改这里就可以.，字符长度未超过欲截取长度时不显示此处
		return $tempstr; 
	}




	function html2text($str,$encode='UTF-8')
	{
		$str = strip_tags($str);
		$str = html_entity_decode($str, ENT_QUOTES, $encode);
		$str = preg_replace("/\&\#.*?\;/i", "", $str);
		return $str;
	}

	function cut_str($sourcestr,$cutlength) //截取中文
	{ 
		$returnstr=''; 
		$i=0; 
		$n=0; 
		$str_length=strlen($sourcestr);//字符串的字节数 
		while (($n<$cutlength) and ($i<=$str_length)) 
		{ 
			$temp_str=substr($sourcestr,$i,1); 
			$ascnum=Ord($temp_str);//得到字符串中第$i位字符的ascii码 
			if ($ascnum>=224)    //如果ASCII位高与224，
			{ 
				$returnstr=$returnstr.substr($sourcestr,$i,3); //根据UTF-8编码规范，将3个连续的字符计为单个字符         
				$i=$i+3;            //实际Byte计为3
				$n++;            //字串长度计1
			}
			elseif ($ascnum>=192) //如果ASCII位高与192，
			{ 
				$returnstr=$returnstr.substr($sourcestr,$i,2); //根据UTF-8编码规范，将2个连续的字符计为单个字符 
				$i=$i+2;            //实际Byte计为2
				$n++;            //字串长度计1
			}
			elseif ($ascnum>=65 && $ascnum<=90) //如果是大写字母，
			{ 
				$returnstr=$returnstr.substr($sourcestr,$i,1); 
				$i=$i+1;            //实际的Byte数仍计1个
				$n++;            //但考虑整体美观，大写字母计成一个高位字符
			}
			else                //其他情况下，包括小写字母和半角标点符号，
			{ 
				$returnstr=$returnstr.substr($sourcestr,$i,1); 
				$i=$i+1;            //实际的Byte数计1个
				$n=$n+0.5;        //小写字母和半角标点等与半个高位字符宽...
			} 
		} 
		if ($str_length>$cutlength){
			$returnstr = $returnstr . "...";//超过长度时在尾处加上省略号
		}
		return $returnstr; 
}
?>