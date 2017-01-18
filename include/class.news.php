<?php

require_once 'class.public.php';
require_once 'class.public_admin.php';

class news {

    public function __construct() {
        
    }

    /*
     * 添加产品信息
     */

    public function _insertData($array, $burl = null, $surl = null) {
        if (!$array [n_command]) {
            $array [n_command] = 0;
        }
        if (!$array[brand]) {
            $array[brand] = "0";
        }
        $sql = "insert into s_news(n_titletype,n_title,n_ctitle,n_curl,n_context,n_detail,n_keyword,n_province,n_pictitle,n_starttime,n_type,n_clickcount,n_systime,n_status,n_bigpicture,n_smpicture,n_recommend,n_remake,n_site,n_class,n_subclass,n_word,n_brand,n_apsp)
		values('". implode(',', $array ['n_titletype']) . "','" . $array ['n_title'] . "','" . $array ['n_ctitle'] . "','" . $array ['n_curl'] . "','" . $array ['com'] . "','" . $array ['n_context'] . "','" . $array ['n_keyword'] . "','" . $array ['n_country'] . "','" . $array ['n_pictitle'] . "','" . $array ['n_starttime'] . "','" . $array ['n_type'] . "',0,'" . mktime() . "',$array[n_status],'" . $burl . "','" . $surl . "',$array[n_command],$array[member],'" . $array [site] . "','". implode(',', $array ['n_class']) . "','". implode(',', $array ['n_subclass']) . "','" . $array [n_word] . "','" . $array [n_brand] . "','" . $array [n_apsp] . "')";
        $result = mysql_query($sql);
      	//echo $sql;exit;
        if ($result) {
            return mysql_insert_id();
        }
    }

   public function _GetAllNew($nid = null, $status = NULL, $limits = null, $type = null, $end = 6, $slsit=null,$sql) {
        //$this->sql ="select * from (select * from s_news  order by s_news.n_systime desc) as t1 left join s_brand on s_brand.b_id=t1.n_brand where 1=1";
        $this->sql ="SELECT * FROM (select * from s_news  order by s_news.n_starttime desc)as t1 left Join s_brand ON t1.n_brand = s_brand.b_id left Join s_class ON t1.n_class = s_class.c_id left Join s_type ON t1.n_subclass = s_type.t_id where t1.n_title != ''";        
        if (!empty($sql)) {
            $this->sql .=  $sql;
        }
        $count = mysql_query($this->sql);
        $count = mysql_num_rows($count);
        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;
        if ($status) {
            $this->sql .= " and n_status=$status";
        }
        if ($nid) {
            $this->sql .= " and n_id=" . $nid;
        }
        if ($type) {
            $this->sql .= " and $type";
        }
        if (!empty($slsit)) {
            $this->sql.= $slsit;
        }
        //$sql .= " order by n_starttime desc,n_systime desc";
        
        //echo $this->sql;
        $pub = new pub ();
        if ($limits) {
           $limits = $limits - 1;
           $this->sql .= " limit ".$limits.",".$end;
            
        } else {
            $pub->getpage($this->sql, 10);
        }
        
       
        $result = mysql_query($this->sql);

        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));


        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['n_class']));
                $smarty->assign("typeselect", $array [0] ['n_subclass']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
public function _GetAllNew_big($nid = null, $status = NULL, $limits = null, $type = null, $end = 6, $slsit=null,$sql) {
        //$this->sql ="select * from (select * from s_news  order by s_news.n_systime desc) as t1 left join s_brand on s_brand.b_id=t1.n_brand where 1=1";
        $this->sql ="SELECT * FROM (select * from s_news  order by s_news.n_starttime desc)as t1 left Join s_brand ON t1.n_brand = s_brand.b_id left Join s_class ON t1.n_class = s_class.c_id left Join s_type ON t1.n_subclass = s_type.t_id where t1.n_title != '' and t1.n_bigpicture != '' and t1.n_site='B'";        
        if (!empty($sql)) {
            $this->sql .=  $sql;
        }
        $count = mysql_query($this->sql);
        $count = mysql_num_rows($count);
        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;
        if ($status) {
            $this->sql .= " and n_status=$status";
        }
        if ($nid) {
            $this->sql .= " and n_id=" . $nid;
        }
        if ($type) {
            $this->sql .= " and $type";
        }
        if (!empty($slsit)) {
            $this->sql.= $slsit;
        }
        //$sql .= " order by n_starttime desc,n_systime desc";
        
        //echo $this->sql;
        $pub = new pub ();
        if ($limits) {
           $limits = $limits - 1;
           $this->sql .= " limit ".$limits.",".$end;
            
        } else {
            $pub->getpage($this->sql, 10);
        }
        
       
        $result = mysql_query($this->sql);

        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));


        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['n_class']));
                $smarty->assign("typeselect", $array [0] ['n_subclass']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
    public function _GetAllNew1($nid = null, $status = NULL, $limits = null, $type = null, $end = 6, $slsit=null,$sql) {
        //$this->sql ="select * from (select * from s_news  order by s_news.n_systime desc) as t1 left join s_brand on s_brand.b_id=t1.n_brand where 1=1";
        $this->sql ="SELECT * FROM (select * from s_news  order by s_news.n_systime desc)as t1 left Join s_brand ON t1.n_brand = s_brand.b_id left Join s_class ON t1.n_class = s_class.c_id left Join s_type ON t1.n_subclass = s_type.t_id where 1=1";       
        if (!empty($sql)) {
            $this->sql .=  $sql;
        }
        $count = mysql_query($this->sql);
        $count = mysql_num_rows($count);
        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;
        if ($status) {
            $this->sql .= " and n_status=$status";
        }
        if ($nid) {
            $this->sql .= " and n_id=" . $nid;
        }
        if ($type) {
            $this->sql .= " and $type";
        }
        if (!empty($slsit)) {
            $this->sql.= $slsit;
        }
        //$sql .= " order by n_starttime desc,n_systime desc";
       
        //echo $this->sql;
        $pub = new pub_admin ();
        if ($limits) {
            $limits = $limits - 1;
            $sql .= " limit $limits,$end";
            
        } else {
            $pub->getpage($this->sql, 20);
        }
        $result = mysql_query($this->sql);

        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));


        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['n_class']));
                $smarty->assign("typeselect", $array [0] ['n_subclass']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
    

    //统计关键字
    public function GetKeyByTop10() {
        $sql = "select n_keyword from s_news where n_status=1";
        $result = mysql_query($sql);
        $array = array();
        $join = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        foreach ($array as $key => $value) {
            $arraylist = split("　", $array [$key] ['n_keyword']);
            foreach ($arraylist as $k => $v) {
                if (!empty($join [$v])) {
                    $num = $join [$v] + 1;
                    $join [$v] = $num;
                } else {
                    $join [$v] = 1;
                }
            }
        }

        arsort($join);
        $join = array_slice($join, 0, 15);
        return $join;
    }

    public function getByid($nid = null) {
        $sql = "SELECT * FROM s_news left Join s_zimu ON s_zimu.z_id = s_news.n_word left Join s_class ON s_class.c_id = s_news.n_class left Join s_type ON s_type.t_id = s_news.n_subclass left Join s_brand ON s_brand.b_id = s_news.n_brand  where 1=1";
        if ($nid) {
            $sql .= " and n_id=" . $nid;
        }
        $result = mysql_query($sql);

        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
         if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['n_class']));
                $smarty->assign("typeselect", $array [0] ['n_subclass']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }

    //点击率
    public function clickcount($num, $id) {
        ++$num;
        $sql = "update s_news set n_clickcount=$num where n_id=$id";
        mysql_query($sql);
    }

    public function _GetAllNewByID($_p = null) {
        $sql = "select * from s_news  left join s_brand on n_brand=b_id where n_title != ''";
        $count = mysql_query($sql);
        $count = mysql_num_rows($count);

        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;

        if (!empty($_p)) {
            $sql .= $_p;
        }
        //echo $_p;
        //echo $_GET['hotkey'];
        $sql .= " order by n_starttime desc";
        $pub = new pub ();
        $pub->getpage($sql, 10);
        $result = mysql_query($sql);
        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));

        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            return $array;
        }
        return false;
    }

    //根据条件查询
    public function getnewByp($p, $is = null) {
        $sql = "select * from s_news left join s_brand on b_id=n_brand where 1=1";
        if ($p) {
            $sql .= " $p";
        }
        $result = mysql_query($sql);
        $array = array();
        $i = 0;
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
            array_push($array [$i], ($i + 1));
            $i++;
        }

        if (!empty($array) && count($array) > 0) {
            return $array;
        }
        return false;
    }

    /*
     * 删除新闻链接
     */

    public function _deletenews($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from s_news where n_id=" . $nid;
            mysql_query($sql);
        }
    }
	public function _GetAllNew_china($nid = null, $status = NULL, $limits = null, $type = null, $end = 6, $slsit=null,$sql) {
        $this->sql = "select * from (select * from s_news  order by s_news.n_starttime desc) as t1 left join s_brand on s_brand.b_id=t1.n_brand where  n_titletype = '中文'";
        if (!empty($sql)) {
            $this->sql .=  $sql;
        }
        $count = mysql_query($this->sql);
        $count = mysql_num_rows($count);

        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;

        if ($status) {
            $this->sql .= " and n_status=$status";
        }
        if ($nid) {
            $this->sql .= " and n_id=" . $nid;
        }
        if ($type) {
            $this->sql .= " and $type";
        }
        if (!empty($slsit)) {
            $this->sql.= $slsit;
        }
        //$sql .= " order by n_starttime desc,n_systime desc";
        
        //echo $sql;
        $pub = new pub_admin ();
        if ($limits) {
            $limits = $limits - 1;
            $sql .= " limit $limits,$end";
            
        } else {
            $pub->getpage($this->sql, 20);
        }
        $result = mysql_query($this->sql);

        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));


        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            return $array;
        }
        return false;
    }
	public function _GetAllNew_japan($nid = null, $status = NULL, $limits = null, $type = null, $end = 6, $slsit=null,$sql) {
        $this->sql = "select * from (select * from s_news  order by s_news.n_systime desc) as t1 left join s_brand on s_brand.b_id=t1.n_brand where n_titletype like '%日语%'";
        if (!empty($sql)) {
            $this->sql .=  $sql;
        }
        
        $count = mysql_query($this->sql);
        $count = mysql_num_rows($count);

        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;

        if ($status) {
            $this->sql .= " and n_status=$status";
        }
        if ($nid) {
            $this->sql .= " and n_id=" . $nid;
        }
        if ($type) {
            $this->sql .= " and $type";
        }
        if (!empty($slsit)) {
            $this->sql.= $slsit;
        }
        //$sql .= " order by n_starttime desc,n_systime desc";

        $pub = new pub_admin ();
        if ($limits) {
            $limits = $limits - 1;
            $sql .= " limit $limits,$end";
            
        } else {
            $pub->getpage($this->sql, 20);
        }
        $result = mysql_query($this->sql);

        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));


        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            return $array;
        }
        return false;
    }
    /*
     * 编辑新闻链接
     */

    public function _editnews($array, $burl = null, $surl = null) {
        header("Context-type:text/html;charset=utf-8");
        if (!$array [n_command]) {
            $array [n_command] = 0;
        }
        $sql = "update s_news set n_class='" . implode(',', $array ['n_class']) . "',n_subclass='" . implode(',', $array ['n_subclass']) .  "',n_titletype='" . implode(',', $array ['n_titletype']) . "',n_title='" . $array ['n_title'] . "',n_ctitle='" . $array ['n_ctitle'] . "',n_curl='" . $array ['n_curl'] . "',n_context='" . $array ['com'] . "',n_detail='" . $array ['n_context'] . "',n_site='" . $array ['site'] . "',n_keyword='" . $array ['n_keyword'] . "',n_province='" . $array ['n_country'] . "',n_pictitle='" . $array ['n_pictitle'] . "',n_starttime='" . $array ['n_starttime'] . "',n_type= '" . $array ['n_type'] . "',n_systime='" . mktime() . "',n_status=$array[n_status],n_recommend=$array[n_command],n_remake=$array[member]";
        if (!empty($array [n_brand])) {
            $sql .= ",n_brand='" . $array [n_brand]. "'";
        }
        if (!empty($array [n_word])) {
            $sql .= ",n_word='" . $array [n_word] . "'";
        }
    	if (!empty($array [n_apsp])) {
            $sql .= ",n_apsp='" . $array [n_apsp] . "'";
        }
        if ($burl != "nofile") {
            $sql .= ",n_bigpicture='" . $burl . "'";
        }
        if ($surl != "nofile") {
            $sql .= ",n_smpicture='" . $surl . "'";
        }
        $sql .= " where n_id=" . $array ['n_id'];
        mysql_query($sql);
        return true;
    }
public function _GetAllNewbig($nid = null, $status = NULL, $limits = null, $type = null, $end = 6, $slsit=null,$sql) {
        //$this->sql ="select * from (select * from s_news  order by s_news.n_systime desc) as t1 left join s_brand on s_brand.b_id=t1.n_brand where 1=1";
        $this->sql ="SELECT * FROM (select * from s_news  order by s_news.n_starttime desc)as t1 left Join s_brand ON t1.n_brand = s_brand.b_id left Join s_class ON t1.n_class = s_class.c_id left Join s_type ON t1.n_subclass = s_type.t_id where t1.n_title != '' and n_bigpicture != '' and n_apsp = 1";        
        if (!empty($sql)) {
            $this->sql .=  $sql;
        }
        $count = mysql_query($this->sql);
        $count = mysql_num_rows($count);
        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;
        if ($status) {
            $this->sql .= " and n_status=$status";
        }
        if ($nid) {
            $this->sql .= " and n_id=" . $nid;
        }
        if ($type) {
            $this->sql .= " and n_site='".$type."'";
        }
        if (!empty($slsit)) {
            $this->sql.= $slsit;
        }
        //$sql .= " order by n_starttime desc,n_systime desc";
        
        //echo $this->sql;
        $pub = new pub ();
        if ($limits) {
            $limits = $limits - 1;
           $this->sql .= " limit ".$limits.",".$end;
            
        } else {
            $pub->getpage($this->sql, 9);
        }
        
       
        $result = mysql_query($this->sql);

        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));


        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['n_class']));
                $smarty->assign("typeselect", $array [0] ['n_subclass']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
public function _GetAllNewsml($nid = null, $status = NULL, $limits = null, $type = null, $end = 6, $slsit=null,$sql) {
        //$this->sql ="select * from (select * from s_news  order by s_news.n_systime desc) as t1 left join s_brand on s_brand.b_id=t1.n_brand where 1=1";
        $this->sql ="SELECT * FROM (select * from s_news  order by s_news.n_starttime desc)as t1 left Join s_brand ON t1.n_brand = s_brand.b_id left Join s_class ON t1.n_class = s_class.c_id left Join s_type ON t1.n_subclass = s_type.t_id where t1.n_title != '' and n_bigpicture != '' and n_apsp = 1";        
        if (!empty($sql)) {
            $this->sql .=  $sql;
        }
        $count = mysql_query($this->sql);
        $count = mysql_num_rows($count);
        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;
        if ($status) {
            $this->sql .= " and n_status=$status";
        }
        if ($nid) {
            $this->sql .= " and n_id=" . $nid;
        }
        if ($type) {
            $this->sql .= " and n_site='".$type."'";
        }
        if (!empty($slsit)) {
            $this->sql.= $slsit;
        }
        //$sql .= " order by n_starttime desc,n_systime desc";
        
        //echo $this->sql;
        $pub = new pub ();
        if ($limits) {
            $limits = $limits - 1;
           $this->sql .= " limit ".$limits.",".$end;
            
        } else {
            $pub->getpage($this->sql, 10);
        }
        
       
        $result = mysql_query($this->sql);

        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));


        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['n_class']));
                $smarty->assign("typeselect", $array [0] ['n_subclass']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
    
	public function _GetAllNew_weifanyic($nid = null, $status = NULL, $limits = null, $type = null, $end = 6, $slsit=null,$sql) {
        $this->sql = "select * from (select * from s_news  order by s_news.n_systime desc) as t1 left join s_brand on s_brand.b_id = t1.n_brand left join s_zimu on s_zimu.z_id = t1.n_word left join s_class on s_class.c_id = t1.n_class left join s_type on s_type.t_id = t1.n_subclass where  n_title = '' and n_ctitle !=''";
        if (!empty($sql)) {
            $this->sql .=  $sql;
        }
        $count = mysql_query($this->sql);
        $count = mysql_num_rows($count);

        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;

        if ($status) {
            $this->sql .= " and n_status=$status";
        }
        if ($nid) {
            $this->sql .= " and n_id=" . $nid;
        }
        if ($type) {
            $this->sql .= " and $type";
        }
        if (!empty($slsit)) {
            $this->sql.= $slsit;
        }
        //$sql .= " order by n_starttime desc,n_systime desc";
        //echo $this->sql;
        $pub = new pub_admin ();
        if ($limits) {
            $limits = $limits - 1;
            $sql .= " limit $limits,$end";
            
        } else {
            $pub->getpage($this->sql, 20);
        }
        $result = mysql_query($this->sql);

        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));
	
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            
            //$s['n_ctitle']=str_replcate("/($_GET[search])/i","<font color='red'><b>\\1</b></font>",$s['n_ctitle']);
           
            
        	$k=explode(" ",$_GET['search']);
        	
				for($sousuo = 0;$sousuo <= count($k);$sousuo++)
				{
					if($k[$sousuo] !='')
					{
						$keycolor="<font color=red>$k[$sousuo]</font>";    
						$s= str_replace($k[$sousuo], $keycolor,$s); 
				    }
				}
             array_push($array, $s); 

            
        }
        //$q=$db->query($sql);
//while($r=$db->fetch_array($q)){
//$r[name]=preg_replace("/($k[0])/i","<font color=red>\\1</font>",$r[name]);
//$r[name]=preg_replace("/($k[1])/i","<font color=red>\\1</font>",$r[name]);
        
       	if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['n_class']));
                $smarty->assign("typeselect", $array [0] ['n_subclass']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return abc;
    }
public function _GetAllNew_free($nid = null, $status = NULL, $limits = null, $type = null, $end = 6, $slsit=null,$sql) {
        $this->sql = "select * from (select * from s_news  order by s_news.n_systime desc) as t1 left join s_brand on s_brand.b_id = t1.n_brand left join s_zimu on s_zimu.z_id = t1.n_word left join s_class on s_class.c_id = t1.n_class left join s_type on s_type.t_id = t1.n_subclass where  n_title != '' and n_remake = 2";
        if (!empty($sql)) {
            $this->sql .=  $sql;
        }
        $count = mysql_query($this->sql);
        $count = mysql_num_rows($count);

        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;

        if ($status) {
            $this->sql .= " and n_status=$status";
        }
        if ($nid) {
            $this->sql .= " and n_id=" . $nid;
        }
        if ($type) {
            $this->sql .= " and $type";
        }
        if (!empty($slsit)) {
            $this->sql.= $slsit;
        }
        //$sql .= " order by n_starttime desc,n_systime desc";
        
        //echo $this->sql;
        $pub = new pub_admin ();
        if ($limits) {
            $limits = $limits - 1;
            $sql .= " limit $limits,$end";
            
        } else {
            $pub->getpage($this->sql, 20);
        }
        $result = mysql_query($this->sql);

        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));


        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
           
            $k=explode(" ",$_GET['search']);
        	
				for($sousuo = 0;$sousuo <= count($k);$sousuo++)
				{
					if($k[$sousuo] !='')
					{
						$keycolor="<font color=red>$k[$sousuo]</font>";    
						$s= str_replace($k[$sousuo], $keycolor,$s); 
				    }
				}
             array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            return $array;
        }
        return abc;
    }
public function _GetAllNew_fanyic($nid = null, $status = NULL, $limits = null, $type = null, $end = 6, $slsit=null,$sql) {
        $this->sql = "select * from (select * from s_news  order by s_news.n_systime desc) as t1 left join s_brand on s_brand.b_id = t1.n_brand left join s_zimu on s_zimu.z_id = t1.n_word left join s_class on s_class.c_id = t1.n_class left join s_type on s_type.t_id = t1.n_subclass where  n_title != '' and n_ctitle != ''";
        if (!empty($sql)) {
            $this->sql .=  $sql;
        }
        $count = mysql_query($this->sql);
        $count = mysql_num_rows($count);

        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;

        if ($status) {
            $this->sql .= " and n_status=$status";
        }
        if ($nid) {
            $this->sql .= " and n_id=" . $nid;
        }
        if ($type) {
            $this->sql .= " and $type";
        }
        if (!empty($slsit)) {
            $this->sql.= $slsit;
        }
        //$sql .= " order by n_starttime desc,n_systime desc";
        
        //echo $this->sql;
        $pub = new pub_admin ();
        if ($limits) {
            $limits = $limits - 1;
            $sql .= " limit $limits,$end";
            
        } else {
            $pub->getpage($this->sql, 20);
        }
        $result = mysql_query($this->sql);

        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));


        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            
        	$k=explode(" ",$_GET['search']);
        	
				for($sousuo = 0;$sousuo <= count($k);$sousuo++)
				{
					if($k[$sousuo] !='')
					{
						$keycolor="<font color=red>$k[$sousuo]</font>";    
						$s= str_replace($k[$sousuo], $keycolor,$s); 
				    }
				}
             array_push($array, $s); 
        }
        if (!empty($array) && count($array) > 0) {
            return $array;
        }
        return abc;
    }
public function _GetAllNew_zhiyour($nid = null, $status = NULL, $limits = null, $type = null, $end = 6, $slsit=null,$sql) {
        $this->sql = "select * from (select * from s_news  order by s_news.n_systime desc) as t1 left join s_brand on s_brand.b_id = t1.n_brand left join s_zimu on s_zimu.z_id = t1.n_word left join s_class on s_class.c_id = t1.n_class left join s_type on s_type.t_id = t1.n_subclass where  n_title != '' and n_ctitle =''";
        if (!empty($sql)) {
            $this->sql .=  $sql;
        }
        $count = mysql_query($this->sql);
        $count = mysql_num_rows($count);

        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;

        if ($status) {
            $this->sql .= " and n_status=$status";
        }
        if ($nid) {
            $this->sql .= " and n_id=" . $nid;
        }
        if ($type) {
            $this->sql .= " and $type";
        }
        if (!empty($slsit)) {
            $this->sql.= $slsit;
        }
        //$sql .= " order by n_starttime desc,n_systime desc";
        
        //echo $sql;
        $pub = new pub_admin ();
        if ($limits) {
            $limits = $limits - 1;
            $sql .= " limit $limits,$end";
            
        } else {
            $pub->getpage($this->sql, 20);
        }
        $result = mysql_query($this->sql);

        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));


        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            
        	$k=explode(" ",$_GET['search']);
        	
				for($sousuo = 0;$sousuo <= count($k);$sousuo++)
				{
					if($k[$sousuo] !='')
					{
						$keycolor="<font color=red>$k[$sousuo]</font>";    
						$s= str_replace($k[$sousuo], $keycolor,$s); 
				    }
				}
             array_push($array, $s); 
        }
        if (!empty($array) && count($array) > 0) {
            return $array;
        }
        return abc;
    }
public function _GetAllNew_allr($nid = null, $status = NULL, $limits = null, $type = null, $end = 6, $slsit=null,$sql) {
        $this->sql = "select * from (select * from s_news  order by s_news.n_systime desc) as t1 left join s_brand on s_brand.b_id = t1.n_brand left join s_zimu on s_zimu.z_id = t1.n_word left join s_class on s_class.c_id = t1.n_class left join s_type on s_type.t_id = t1.n_subclass where  n_title != ''";
        if (!empty($sql)) {
            $this->sql .=  $sql;
        }
        $count = mysql_query($this->sql);
        $count = mysql_num_rows($count);

        unset($_SESSION ['count']);
        $_SESSION ['count'] = $count;

        if ($status) {
            $this->sql .= " and n_status=$status";
        }
        if ($nid) {
            $this->sql .= " and n_id=" . $nid;
        }
        if ($type) {
            $this->sql .= " and $type";
        }
        if (!empty($slsit)) {
            $this->sql.= $slsit;
        }
        //$sql .= " order by n_starttime desc,n_systime desc";
        
        //echo $this->sql;
        $pub = new pub_admin ();
        if ($limits) {
            $limits = $limits - 1;
            $sql .= " limit $limits,$end";
            
        } else {
            $pub->getpage($this->sql, 20);
        }
        $result = mysql_query($this->sql);

        //条数
        //unset($_SESSION['count']);
        //  $_SESSION['count'] = count(mysql_fetch_array ( $result, MYSQL_ASSOC ));


        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            
        	$k=explode(" ",$_GET['search']);
        	
				for($sousuo = 0;$sousuo <= count($k);$sousuo++)
				{
					if($k[$sousuo] !='')
					{
						$keycolor="<font color=red>$k[$sousuo]</font>";    
						$s= str_replace($k[$sousuo], $keycolor,$s); 
				    }
				}
             array_push($array, $s); 
        }
        if (!empty($array) && count($array) > 0) {
            return $array;
        }
        return abc;
    }
}

?> 