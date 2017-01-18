<?php

require_once 'class.public_admin.php';
require_once 'class.public_japan.php';
require_once 'class.public_china.php';
require_once 'class.getfirstword.php';

class Brand {

    private $sql;
    private $table = "s_brand";

    public function __construct() {
        
    }

    public function addBrands($p, $imgname,$pic) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO " .$this->table . "(b_cname,b_pinyin,b_cfenlei,b_cbrief,b_jname,b_pianjia,b_class,b_type,b_brief,b_ename,b_efenlei,b_ebrief,b_country,b_url,b_qcname,b_qjname,b_qename,b_address,b_tel,b_man,b_firstword,b_static,b_keyword,b_logo,b_spell)VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", mysql_real_escape_string($p ['cname']),mysql_real_escape_string($p ['pinyin']),mysql_real_escape_string($p ['b_cfenlei']),mysql_real_escape_string($p ['com']),  mysql_real_escape_string($p ['jname']), mysql_real_escape_string($p ['pianjia']),mysql_real_escape_string(implode(",", $p ['b_class'])), mysql_real_escape_string(implode(",", $p ['b_type'])),  mysql_real_escape_string($p ['b_brief']),mysql_real_escape_string($p ['ename']),mysql_real_escape_string($p ['b_efenlei']),mysql_real_escape_string($p ['b_ebrief']),mysql_real_escape_string($p ['b_country']),mysql_real_escape_string($p ['url']), mysql_real_escape_string($p ['qcname']),mysql_real_escape_string($p ['qjname']),mysql_real_escape_string($p ['qename']),mysql_real_escape_string($p ['address']),mysql_real_escape_string($p ['tel']),mysql_real_escape_string($p ['man']),mysql_real_escape_string(getfirstchar($p ['pinyin'])),mysql_real_escape_string($p ['static']),mysql_real_escape_string($p ['keyword']),mysql_real_escape_string($imgname),mysql_real_escape_string($p ['spell']));
            mysql_query($this->sql);
            return mysql_insert_id();
        }
    }

    public function updatBrands($_array, $imgname,$pic) {
        $this->sql = "UPDATE " . $this->table . " 
		SET 
		b_cname='" . $_array ['cname'] . "',
		b_pinyin='" . $_array ['pinyin'] . "',
		b_spell='" . $_array ['spell'] . "',
		b_cfenlei='" . $_array ['b_cfenlei'] . "',
		b_cbrief='" . $_array ['com'] . "',
		b_jname='" . $_array ['jname'] . "',
		b_pianjia='" . $_array ['pianjia'] . "',
		b_class='" . implode(',', $_array ['b_class']) . "',
		b_type='" . implode(',', $_array ['b_type']) .  "',
		b_brief='" . $_array ['com1'] . "',
		b_ename='" . $_array ['ename'] . "',
		b_efenlei='" . $_array ['b_efenlei'] . "',
		b_ebrief='" . $_array ['b_ebrief'] . "',
		b_country='" . $_array ['b_country'] . "',
		b_url='" . $_array ['url'] . "',
		b_qcname='" . $_array ['qcname'] . "',
		b_qjname='" . $_array ['qjname'] . "',
		b_qename='" . $_array ['qename'] . "',
		b_address='" . $_array ['address'] . "',
		b_tel='" . $_array ['tel'] . "',
		b_man='" . $_array ['man'] . "',
		b_firstword='" . getfirstchar($_array ['pinyin']) . "',
		b_static='" . $_array ['static'] . "',";
        if (!empty($imgname)) {
            $this->sql .= "b_logo='" . $imgname . "',";
        }
        $this->sql .= "b_keyword='" . $_array ['keyword'] . "' where b_id=" . $_array ['id'];
		mysql_query($this->sql);
        return true;
    }


    public function _deleteBrands($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from " . $this->table . "  where b_id=" . $nid;
            mysql_query($sql);
        }
    }
	
    public function getBrands($p) {
        $this->sql="SELECT * FROM (select * from s_brand  order by b_id desc)as t1  left Join s_zimu ON s_zimu.z_name = t1.b_spell left Join s_type ON s_type.t_id = t1.b_type left Join s_class ON s_class.c_id = t1.b_class left Join s_country ON s_country.r_zcountry = t1.b_country left join (select b_id,COUNT(n_id) as ti from s_brand left join s_news on s_brand.b_id = s_news.n_brand GROUP BY b_id order by b_id desc ) as t2 on t1.b_id = t2.b_id where 1=1";
        //$this->sql="select * from (select t1.c_name,t1.t_name,t1.c_id,t1.t_id,s_brand.b_brief,s_brand.b_cbrief,s_brand.b_cname,s_brand.b_jname,s_brand.b_keyword,s_brand.b_pianjia,s_brand.b_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t1 left join s_brand on t1.t_id=s_brand.b_type)as a1,(select t2.c_name,t2.t_name,t2.c_id,t2.t_id,s_people.p_jbrief,s_people.p_zbrief,s_people.p_cname,s_people.p_jname,s_people.p_keyword,s_people.p_pianjia,s_people.p_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t2 left join s_people on t2.t_id=s_people.p_type) as a2,(select t3.c_name,t3.t_name,t3.c_id,t3.t_id,s_guyou.g_jbrief,s_guyou.g_zbrief,s_guyou.g_cname,s_guyou.g_jname,s_guyou.g_keyword,s_guyou.g_pianjia,s_guyou.g_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t3 left join s_guyou on t3.t_id=s_guyou.g_type)as a3 where 1=1";
        if (!empty($p)) {
            $this->sql .= $p;
        }
        //SELECT * from (SELECT * from (select * from s_brand left join s_class on s_class.c_id=s_brand.b_class) as t1 left join s_type on t1.b_type = s_type.t_id order by t1.b_id desc)as t2 where 1=1 and b_ename like "B%" limit 0,10﻿
        //SELECT * from (SELECT * from (select * from s_brand left join s_class on s_class.c_id=s_brand.b_class) as t1 left join s_type on t1.b_type = s_type.t_id order by t1.b_id desc)as t2 where 1=1 and b_ename like "B%" limit 0,10;
     
		$pub = new pub_admin ();
		$prepage=20;
        $pub->getpage($this->sql,$prepage);
        //echo $pub;
        //echo $this->sql;
        $result = mysql_query($this->sql);
       // $sql .= " order by b_id desc";
        //$pub = new pub ();
        //$pub->getpage($this->sql, 20);
        //$result = mysql_query($this->sql);
		//echo $this->sql;
		
        $sql="select count(*) from s_brand where 1=1";
    	if (!empty($p)) {
            $sql .= $p;
        }
	    $res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$_SESSION['countbrand'] = $row[0];
		
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['b_class']));
                $smarty->assign("typeselect", $array [0] ['b_type']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
	public function getBrands_9($p) {
        $this->sql="SELECT * FROM (select * from s_brand  order by b_id desc)as t1  left Join s_zimu ON s_zimu.z_name = t1.b_spell left Join s_type ON s_type.t_id = t1.b_type left Join s_class ON s_class.c_id = t1.b_class left Join s_country ON s_country.r_zcountry = t1.b_country where 1=1";
        //$this->sql="select * from (select t1.c_name,t1.t_name,t1.c_id,t1.t_id,s_brand.b_brief,s_brand.b_cbrief,s_brand.b_cname,s_brand.b_jname,s_brand.b_keyword,s_brand.b_pianjia,s_brand.b_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t1 left join s_brand on t1.t_id=s_brand.b_type)as a1,(select t2.c_name,t2.t_name,t2.c_id,t2.t_id,s_people.p_jbrief,s_people.p_zbrief,s_people.p_cname,s_people.p_jname,s_people.p_keyword,s_people.p_pianjia,s_people.p_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t2 left join s_people on t2.t_id=s_people.p_type) as a2,(select t3.c_name,t3.t_name,t3.c_id,t3.t_id,s_guyou.g_jbrief,s_guyou.g_zbrief,s_guyou.g_cname,s_guyou.g_jname,s_guyou.g_keyword,s_guyou.g_pianjia,s_guyou.g_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t3 left join s_guyou on t3.t_id=s_guyou.g_type)as a3 where 1=1";
        if (!empty($p)) {
            $this->sql .= $p;
        }
        //SELECT * from (SELECT * from (select * from s_brand left join s_class on s_class.c_id=s_brand.b_class) as t1 left join s_type on t1.b_type = s_type.t_id order by t1.b_id desc)as t2 where 1=1 and b_ename like "B%" limit 0,10﻿
        //SELECT * from (SELECT * from (select * from s_brand left join s_class on s_class.c_id=s_brand.b_class) as t1 left join s_type on t1.b_type = s_type.t_id order by t1.b_id desc)as t2 where 1=1 and b_ename like "B%" limit 0,10;
     
		$pub = new pub_admin ();
		$prepage=20;
        $pub->getpage($this->sql,$prepage);
        $result = mysql_query($this->sql);
       // $sql .= " order by b_id desc";
        //$pub = new pub ();
        //$pub->getpage($this->sql, 20);
        //$result = mysql_query($this->sql);
		//echo $this->sql;
		
        $sql="select count(*) from s_brand where 1=1";
    	if (!empty($p)) {
            $sql .= $p;
        }
	    $res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$_SESSION['countbrand'] = $row[0];
		
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['b_class']));
                $smarty->assign("typeselect", $array [0] ['b_type']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
	public function getBrands_disc($p) {
        $this->sql="SELECT * FROM s_brand where 1=1";
        //$this->sql="select * from (select t1.c_name,t1.t_name,t1.c_id,t1.t_id,s_brand.b_brief,s_brand.b_cbrief,s_brand.b_cname,s_brand.b_jname,s_brand.b_keyword,s_brand.b_pianjia,s_brand.b_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t1 left join s_brand on t1.t_id=s_brand.b_type)as a1,(select t2.c_name,t2.t_name,t2.c_id,t2.t_id,s_people.p_jbrief,s_people.p_zbrief,s_people.p_cname,s_people.p_jname,s_people.p_keyword,s_people.p_pianjia,s_people.p_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t2 left join s_people on t2.t_id=s_people.p_type) as a2,(select t3.c_name,t3.t_name,t3.c_id,t3.t_id,s_guyou.g_jbrief,s_guyou.g_zbrief,s_guyou.g_cname,s_guyou.g_jname,s_guyou.g_keyword,s_guyou.g_pianjia,s_guyou.g_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t3 left join s_guyou on t3.t_id=s_guyou.g_type)as a3 where 1=1";
        if (!empty($p)) {
            $this->sql .= $p;
        }
        //SELECT * from (SELECT * from (select * from s_brand left join s_class on s_class.c_id=s_brand.b_class) as t1 left join s_type on t1.b_type = s_type.t_id order by t1.b_id desc)as t2 where 1=1 and b_ename like "B%" limit 0,10﻿
        //SELECT * from (SELECT * from (select * from s_brand left join s_class on s_class.c_id=s_brand.b_class) as t1 left join s_type on t1.b_type = s_type.t_id order by t1.b_id desc)as t2 where 1=1 and b_ename like "B%" limit 0,10;
		$pub = new pub1 ();
		$prepage=5;
        $pub->getpage1($this->sql,$prepage);
        $result = mysql_query($this->sql);
       // $sql .= " order by b_id desc";
        //$pub = new pub ();
        //$pub->getpage($this->sql, 20);
        //$result = mysql_query($this->sql);
		
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['b_class']));
                $smarty->assign("typeselect", $array [0] ['b_type']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
public function getBrands_disc_china($p) {
        $this->sql="SELECT * FROM s_brand where 1=1";
        //$this->sql="select * from (select t1.c_name,t1.t_name,t1.c_id,t1.t_id,s_brand.b_brief,s_brand.b_cbrief,s_brand.b_cname,s_brand.b_jname,s_brand.b_keyword,s_brand.b_pianjia,s_brand.b_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t1 left join s_brand on t1.t_id=s_brand.b_type)as a1,(select t2.c_name,t2.t_name,t2.c_id,t2.t_id,s_people.p_jbrief,s_people.p_zbrief,s_people.p_cname,s_people.p_jname,s_people.p_keyword,s_people.p_pianjia,s_people.p_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t2 left join s_people on t2.t_id=s_people.p_type) as a2,(select t3.c_name,t3.t_name,t3.c_id,t3.t_id,s_guyou.g_jbrief,s_guyou.g_zbrief,s_guyou.g_cname,s_guyou.g_jname,s_guyou.g_keyword,s_guyou.g_pianjia,s_guyou.g_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t3 left join s_guyou on t3.t_id=s_guyou.g_type)as a3 where 1=1";
        if (!empty($p)) {
            $this->sql .= $p;
        }
        //SELECT * from (SELECT * from (select * from s_brand left join s_class on s_class.c_id=s_brand.b_class) as t1 left join s_type on t1.b_type = s_type.t_id order by t1.b_id desc)as t2 where 1=1 and b_ename like "B%" limit 0,10﻿
        //SELECT * from (SELECT * from (select * from s_brand left join s_class on s_class.c_id=s_brand.b_class) as t1 left join s_type on t1.b_type = s_type.t_id order by t1.b_id desc)as t2 where 1=1 and b_ename like "B%" limit 0,10;
		$pub = new pub_china ();
		$prepage=5;
        $pub->getpage($this->sql,$prepage);
        $result = mysql_query($this->sql);
       // $sql .= " order by b_id desc";
        //$pub = new pub ();
        //$pub->getpage($this->sql, 20);
        //$result = mysql_query($this->sql);
		
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['b_class']));
                $smarty->assign("typeselect", $array [0] ['b_type']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
	public function GetNewnews() {
        $this->sql = "select * from (select s_news.n_titletype,s_news.n_ctitle,s_news.n_curl,s_news.n_systime,s_news.n_id,s_brand.b_keyword,s_news.n_smpicture,s_news.n_title,s_news.n_starttime,s_brand.b_cname from s_news left join s_brand on b_id=n_brand where 1=1) as t1 left join (select substring(s_news.n_context,1,60) as t3,s_news.n_id from s_news where 1=1) as t2 on t1.n_id= t2.n_id where n_titletype='中文' order by t1.n_starttime desc";
        $pub = new pub ();
		$prepage=10;
        $pub->getpage($this->sql,$prepage);
        $result = mysql_query($this->sql);
		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
    }
	public function GetNewnews_japan() {
        $this->sql = "select * from (select s_news.n_titletype,s_news.n_ctitle,s_news.n_systime,s_news.n_id,s_brand.b_keyword,s_news.n_smpicture,s_news.n_title,s_news.n_starttime,s_brand.b_cname from s_news left join s_brand on b_id=n_brand where 1=1) as t1 left join (select substring(s_news.n_context,1,60) as t3,s_news.n_id from s_news where 1=1) as t2 on t1.n_id= t2.n_id where n_titletype='日语' order by t1.n_starttime desc";
        $pub = new pub ();
		$prepage=10;
        $pub->getpage($this->sql,$prepage);
        $result = mysql_query($this->sql);
		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
    }
	public function Getsousuo($p) {
        $this->sql = "select  DISTINCT * from (SELECT t2.b_id,t2.b_cname,t2.b_ename,t2.b_jname,t2.b_brief,t2.b_cbrief,t2.b_pinyin,t2.b_logo,t2.b_keyword,t2.b_pianjia,t2.c_name,t2.t_name from (SELECT * from (select * from s_brand left join s_class on s_class.c_id=s_brand.b_class) as t1 left join s_type on t1.b_type = s_type.t_id order by t1.b_id desc)as t2 where 1=1
) as a1 , (SELECT t4.p_cname,t4.p_ename,t4.p_jname,t4.p_jbrief,t4.p_zbrief,t4.p_pinyin,t4.p_logo,t4.p_keyword,t4.p_pianjia,t4.c_name,t4.t_name from (SELECT * from (select * from s_people left join s_class on s_class.c_id=s_people.p_class) as t3 left join s_type on t3.p_type = s_type.t_id order by t3.p_id desc)as t4 where 1=1
) as a2 , (SELECT t6.g_cname,t6.g_ename,t6.g_jname,t6.g_jbrief,t6.g_zbrief,t6.g_pinyin,t6.g_logo,t6.g_keyword,t6.g_pianjia,t6.c_name,t6.t_name from (SELECT * from (select * from s_guyou left join s_class on s_class.c_id=s_guyou.g_class) as t5 left join s_type on t5.g_type = s_type.t_id order by t5.g_id desc)as t6 where 1=1
) as a3 where 1=1";
		if (!empty($p)) {
            $this->sql .= $p;
        }
        echo $this->sql;
        $result = mysql_query($this->sql);
		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
    }

	public function getAllBrands($p) {
        $this->sql="SELECT * FROM (select * from s_brand  order by b_id desc)as t1  left Join s_zimu ON s_zimu.z_name = t1.b_spell left Join s_type ON s_type.t_id = t1.b_type left Join s_class ON s_class.c_id = t1.b_class left Join s_country ON s_country.r_zcountry = t1.b_country where 1=1";
        //$this->sql="select * from (select t1.c_name,t1.t_name,t1.c_id,t1.t_id,s_brand.b_brief,s_brand.b_cbrief,s_brand.b_cname,s_brand.b_jname,s_brand.b_keyword,s_brand.b_pianjia,s_brand.b_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t1 left join s_brand on t1.t_id=s_brand.b_type)as a1,(select t2.c_name,t2.t_name,t2.c_id,t2.t_id,s_people.p_jbrief,s_people.p_zbrief,s_people.p_cname,s_people.p_jname,s_people.p_keyword,s_people.p_pianjia,s_people.p_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t2 left join s_people on t2.t_id=s_people.p_type) as a2,(select t3.c_name,t3.t_name,t3.c_id,t3.t_id,s_guyou.g_jbrief,s_guyou.g_zbrief,s_guyou.g_cname,s_guyou.g_jname,s_guyou.g_keyword,s_guyou.g_pianjia,s_guyou.g_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t3 left join s_guyou on t3.t_id=s_guyou.g_type)as a3 where 1=1";
        if (!empty($p)) {
            $this->sql .= $p;
        }
        //SELECT * from (SELECT * from (select * from s_brand left join s_class on s_class.c_id=s_brand.b_class) as t1 left join s_type on t1.b_type = s_type.t_id order by t1.b_id desc)as t2 where 1=1 and b_ename like "B%" limit 0,10﻿
        //SELECT * from (SELECT * from (select * from s_brand left join s_class on s_class.c_id=s_brand.b_class) as t1 left join s_type on t1.b_type = s_type.t_id order by t1.b_id desc)as t2 where 1=1 and b_ename like "B%" limit 0,10;
     
		$pub = new pub_admin ();
		$prepage=20;
        $pub->getpage($this->sql,$prepage);
        $result = mysql_query($this->sql);
       // $sql .= " order by b_id desc";
        //$pub = new pub ();
        //$pub->getpage($this->sql, 20);
        //$result = mysql_query($this->sql);
		//echo $this->sql;
		
        $sql="select count(*) from s_brand where 1=1";
    	if (!empty($p)) {
            $sql .= $p;
        }
	    $res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$_SESSION['countbrand'] = $row[0];
		
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['b_class']));
                $smarty->assign("typeselect", $array [0] ['b_type']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }
        return false;
    }
}

?>