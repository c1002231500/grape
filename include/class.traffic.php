<?php

require_once 'class.public.php';
require_once 'class.getfirstword.php';
require_once 'class.public_admin.php';

class Traffic {

    private $sql;

    public function __construct() {
        
    }
	
	public function addTraffic($p) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO s_traffic(t_prov,t_city,t_name,t_station,t_district,t_pv,t_brief)VALUES('%s','%s','%s','%s','%s','%s','%s')", 
            mysql_real_escape_string(implode(",", $p ['t_prov'])),
            mysql_real_escape_string(implode(",", $p ['t_city'])),
            mysql_real_escape_string($p ['t_name']),
            mysql_real_escape_string($p ['t_station']),
            mysql_real_escape_string($p ['t_district']),
            mysql_real_escape_string($p ['t_pv']),
            mysql_real_escape_string($p ['t_brief']));
            
            mysql_query($this->sql);
            //echo $this->sql;exit;
            return mysql_insert_id();
        }
    }
	public function updatTraffic($_array) {
        $this->sql = "UPDATE s_traffic SET 
		t_prov='" . implode(',', $_array ['t_prov']) . "',
		t_city='" . implode(',', $_array ['t_city']) . "',
		t_name='" . $_array ['t_name'] . "',
		t_station='" . $_array ['t_station'] . "',
		t_district='" . $_array ['t_district'] . "',
		t_pv='" . $_array ['t_pv'] . "',
        t_brief='" . $_array ['t_brief'] . "' where t_id=" . $_array ['id'];
		mysql_query($this->sql);
		//echo $this->sql;exit;
        return true;
    }
    
	public function getTraffic($p) {
        $this->sql="select * from s_traffic where 1=1";
        if (!empty($p)) {
            $this->sql .= $p;
        }            
		$pub = new pub_admin ();
		$prepage=20;
        $pub->getpage($this->sql,$prepage);
        $result = mysql_query($this->sql);
        //echo  $this->sql;
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;
                $smarty->assign("cityselect", explode(",", $array [0] ['t_city']));
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }

        return false;
    }
	public function getCity($p) {
        $this->sql="select * from s_city where 1=1";
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
    
	public function _deleteTraffic($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from s_traffic where t_id=" . $nid;
            mysql_query($sql);
        }
    }
}

?>