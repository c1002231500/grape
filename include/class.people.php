<?php

require_once 'class.public.php';
require_once 'class.getfirstword.php';
require_once 'class.public_admin.php';

class People {

    private $sql;
    private $table = "s_people";

    public function __construct() {
        
    }

    public function addPeople($p, $imgname) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO " .$this->table . "(p_cname,p_pinyin,p_zfenlei,p_pfenlei,p_zbrief,p_jname,p_pianjia,p_class,p_type,p_pjfenlei,p_jbrief,p_ename,p_efenlei,p_ebrief,p_country,p_logo,p_firstword,p_static,p_keyword)VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", mysql_real_escape_string($p ['p_cname']),mysql_real_escape_string($p ['p_pinyin']),mysql_real_escape_string($p ['p_zfenlei']),mysql_real_escape_string($p ['p_pfenlei']),mysql_real_escape_string($p ['p_zbrief']),  mysql_real_escape_string($p ['p_jname']), mysql_real_escape_string($p ['p_pianjia']),mysql_real_escape_string(implode(",", $p ['p_class'])), mysql_real_escape_string(implode(",", $p ['p_type'])),  mysql_real_escape_string($p ['p_pjfenlei']),mysql_real_escape_string($p ['p_jbrief']),mysql_real_escape_string($p ['p_ename']),mysql_real_escape_string($p ['p_efenlei']),mysql_real_escape_string($p ['p_ebrief']),mysql_real_escape_string($p ['p_country']),mysql_real_escape_string($imgname),mysql_real_escape_string(getfirstchar($p ['p_cname'])),mysql_real_escape_string($p ['static']),mysql_real_escape_string($p ['keyword']));
            mysql_query($this->sql);
            return mysql_insert_id();
        }
    }

    public function updatPeople($_array, $imgname) {
        $this->sql = "UPDATE " . $this->table . " 
		SET 
		p_cname='" . $_array ['p_cname'] . "',
		p_pinyin='" . $_array ['p_pinyin'] . "',
		p_zfenlei='" . $_array ['p_zfenlei'] . "',
		p_pfenlei='" . $_array ['p_pfenlei'] . "',
		p_zbrief='" . $_array ['p_zbrief'] . "',
		p_jname='" . $_array ['p_jname'] . "',
		p_pianjia='" . $_array ['p_pianjia'] . "',
		p_class='" . implode(',', $_array ['p_class']) . "',
		p_type='" . implode(',', $_array ['p_type']) .  "',
		p_pjfenlei='" . $_array ['p_pjfenlei'] . "',
		p_jbrief='" . $_array ['p_jbrief'] . "',
		p_ename='" . $_array ['p_ename'] . "',
		p_efenlei='" . $_array ['p_efenlei'] . "',
		p_ebrief='" . $_array ['p_ebrief'] . "',
		p_country='" . $_array ['p_country'] . "',";
        if (!empty($imgname)) {
            $this->sql .= "p_logo='" . $imgname . "',";
        }
        $this->sql .= "p_firstword='" . getfirstchar($_array ['p_cname']) . "' 	,
        p_static='" . $_array ['static'] . "',
        p_keyword='" . $_array ['keyword'] . "' where p_id=" . $_array ['id'];
		mysql_query($this->sql);
        return true;
    }

    public function _deletePeople($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from " . $this->table . "  where p_id=" . $nid;
            mysql_query($sql);
        }
    }
	
    public function getPeople($p) {
        $this->sql="SELECT * from (SELECT * from (select * from s_people left join s_class on s_class.c_id=s_people.p_class) as t1 left join s_type on t1.p_type = s_type.t_id order by t1.p_id desc)as t2 where 1=1";
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
        $sql="select count(*) from s_people where 1=1";
    	if (!empty($p)) {
            $sql .= $p;
        }
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$_SESSION['countpeople'] = $row[0];

        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("classselect", explode(",", $array [0] ['p_class']));
                $smarty->assign("typeselect", $array [0] ['p_type']);
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }

        return false;
    }



}

?>