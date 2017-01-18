<?php

require_once 'class.public.php';
require_once 'class.getfirstword.php';
require_once 'class.public_admin.php';

class Guyou {

    private $sql;
    private $table = "s_guyou";

    public function __construct() {
        
    }

    public function addGuyou($p, $imgname) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO " .$this->table . "(
            g_cname,g_pinyin,g_zfenlei,g_gfenlei,g_zbrief,g_jname,g_pianjia,
            g_class,g_type,g_jgfenlei,g_jbrief,g_ename,g_efenlei,g_ebrief,g_country,
            g_logo,g_firstword,g_static,g_keyword)
            VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", 
            mysql_real_escape_string($p ['g_cname']),
            mysql_real_escape_string($p ['g_pinyin']),
            mysql_real_escape_string($p ['g_zfenlei']),
            mysql_real_escape_string($p ['g_gfenlei']),
            mysql_real_escape_string($p ['g_zbrief']),  
            mysql_real_escape_string($p ['g_jname']), 
            mysql_real_escape_string($p ['g_pianjia']),
            mysql_real_escape_string(implode(",", $p ['g_class'])),
            mysql_real_escape_string(implode(",", $p ['g_type'])),  
            mysql_real_escape_string($p ['g_jgfenlei']),
            mysql_real_escape_string($p ['g_jbrief']),
            mysql_real_escape_string($p ['g_ename']),
            mysql_real_escape_string($p ['g_efenlei']),
            mysql_real_escape_string($p ['g_ebrief']),
            mysql_real_escape_string($p ['g_country']),
            mysql_real_escape_string($imgname),
            mysql_real_escape_string(getfirstchar($p ['g_cname'])),
            mysql_real_escape_string($p ['static']),
            mysql_real_escape_string($p ['keyword']));
            mysql_query($this->sql);
            return mysql_insert_id();
        }
    }

	public function updateGuyou($_array, $imgname) {
        $this->sql = "UPDATE " . $this->table . " 
		SET 
		g_cname='" . $_array ['g_cname'] . "',
		g_pinyin='" . $_array ['g_pinyin'] . "',
		g_zfenlei='" . $_array ['g_zfenlei'] . "',
		g_gfenlei='" . $_array ['g_gfenlei'] . "',
		g_zbrief='" . $_array ['g_zbrief'] . "',
		g_jname='" . $_array ['g_jname'] . "',
		g_pianjia='" . $_array ['g_pianjia'] . "',
		g_class='" . implode(',', $_array ['g_class']) . "',
		g_type='" . implode(',', $_array ['g_type']) .  "',
		g_jgfenlei='" . $_array ['g_jgfenlei'] . "',
		g_jbrief='" . $_array ['g_jbrief'] . "',
		g_ename='" . $_array ['g_ename'] . "',
		g_efenlei='" . $_array ['g_efenlei'] . "',
		g_ebrief='" . $_array ['g_ebrief'] . "',
		g_country='" . $_array ['g_country'] . "',";
        if (!empty($imgname)) {
            $this->sql .= "g_logo='" . $imgname . "',";
        }
        $this->sql .= "g_firstword='" . getfirstchar($_array ['g_cname']) . "' 	,
        g_static='" . $_array ['static'] . "',
        g_keyword='" . $_array ['keyword'] . "' where g_id=" . $_array ['id'];
		mysql_query($this->sql);
        return true;
    }

    public function _deleteGuyou($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from " . $this->table . "  where g_id=" . $nid;
            mysql_query($sql);
        }
    }
	
    public function getGuyou($p) {
        $this->sql="SELECT * from (SELECT * from (select * from s_guyou left join s_class on s_class.c_id=s_guyou.g_class) as t1 left join s_type on t1.g_type = s_type.t_id order by t1.g_id desc)as t2 where 1=1";
        if (!empty($p)) {
            $this->sql .= $p;
        }
       

        
		$pub = new pub_admin ();
		$prepage=10;
        $pub->getpage($this->sql,$prepage);
        $result = mysql_query($this->sql);
       // $sql .= " order by b_id desc";
        //$pub = new pub ();
        //$pub->getpage($this->sql, 20);
        //$result = mysql_query($this->sql);
        $sql="select count(*) from s_guyou where 1=1";
    	if (!empty($p)) {
            $sql .= $p;
        }
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$_SESSION['countguyou'] = $row[0];

        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['g_class']));
                $smarty->assign("typeselect", $array [0] ['g_type']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }

        return false;
    }



}

?>