<?php

require_once 'class.public.php';
require_once 'class.getfirstword.php';
require_once 'class.public_admin.php';

class District {

    private $sql;

    public function __construct() {
        
    }
	public function addDistrict($p, $imgname) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO s_district(d_name,d_jname,d_prov,d_city,d_subway,d_pv,d_mail,d_led,d_site,d_pic,d_brief,d_level)VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", 
            mysql_real_escape_string($p ['d_name']),
            mysql_real_escape_string($p ['d_jname']),
            mysql_real_escape_string($p ['d_prov']),
            mysql_real_escape_string($p ['d_city']),  
            mysql_real_escape_string(implode(",", $p ['d_subway'])),
            mysql_real_escape_string($p ['d_pv']),
            mysql_real_escape_string($p ['d_mail']),
            mysql_real_escape_string($p ['d_led']),
            mysql_real_escape_string($p ['d_site']),
            mysql_real_escape_string($imgname),
            mysql_real_escape_string($p ['d_brief']),
            mysql_real_escape_string($p ['d_level']));
            
            mysql_query($this->sql);
            //echo $this->sql;exit;
            return mysql_insert_id();
        }
    }
	public function updatDistrict($_array, $imgname) {
        $this->sql = "UPDATE s_district SET 
		d_name='" . $_array ['d_name'] . "',
		d_jname='" . $_array ['d_jname'] . "',
		d_prov='" . $_array ['d_prov'] . "',
		d_city='" . $_array ['d_city'] . "',
		d_subway='" . implode(',', $_array ['d_subway']) . "',
		d_pv='" . $_array ['d_pv'] . "',
		d_mail='" . $_array ['d_mail'] . "',
		d_led='" . $_array ['d_led'] . "',
		d_site='" . $_array ['d_site'] . "',";
        if (!empty($imgname)) {
            $this->sql .= "d_pic='" . $imgname . "',";
        }
        $this->sql .= "d_brief='" . $_array ['d_brief'] . "',
        d_level='" . $_array ['d_level'] . "' where d_id=" . $_array ['id'];
		mysql_query($this->sql);
		//echo $this->sql;exit;
        return true;
    }
    public function getDistrict($p) {
        $this->sql="select * from s_district where 1=1";
        if (!empty($p)) {
            $this->sql .= $p;
        }            
		$pub = new pub_admin ();
		$prepage=20;
        $pub->getpage($this->sql,$prepage);
        $result = mysql_query($this->sql);
        //echo $this->sql;
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("subwayselect", explode(",", $array [0] ['d_subway']));
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }

        return false;
    }
    
	public function getSubway($p) {
        $this->sql="select * from nx_subway order by s_id desc ";
        if (!empty($p)) {
            $this->sql .= $p;
        }            
        $result = mysql_query($this->sql);
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

  	public function _deleteDistrict($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from s_district where d_id=" . $nid;
            mysql_query($sql);
        }
    }
 	
}

?>