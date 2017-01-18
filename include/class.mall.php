<?php

require_once 'class.public.php';
require_once 'class.getfirstword.php';
require_once 'class.public_admin.php';

class Mall {

    private $sql;

    public function __construct() {
        
    }
	public function addMall($p, $imgname) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO s_mall(m_word,m_brand,m_name,m_jname,m_ename,m_prov,m_city,m_subway,m_fenlei,m_sefenlei,m_keyword,m_pv,m_led,m_site,m_brief,m_pic,m_level)
            VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", 
            mysql_real_escape_string($p ['n_word']),
            mysql_real_escape_string($p ['n_brand']),
            mysql_real_escape_string($p ['m_name']),
            mysql_real_escape_string($p ['m_jname']), 
            mysql_real_escape_string($p ['m_ename']),
            mysql_real_escape_string($p ['m_prov']),
            mysql_real_escape_string($p ['m_city']),
            mysql_real_escape_string(implode(",", $p ['m_subway'])),
            mysql_real_escape_string($p ['m_fenlei']),
            mysql_real_escape_string(implode(",", $p ['m_sefenlei'])),
            mysql_real_escape_string($p ['m_keyword']),
            mysql_real_escape_string($p ['m_pv']),
            mysql_real_escape_string($p ['m_led']),
            mysql_real_escape_string($p ['m_site']),
            mysql_real_escape_string($p ['m_brief']),
            mysql_real_escape_string($imgname),
            mysql_real_escape_string($p ['m_level']));
            
            mysql_query($this->sql);
            //echo $this->sql;exit;
            return mysql_insert_id();
        }
    }
	public function updatMall($_array, $imgname) {
        $this->sql = "UPDATE s_mall SET 
		m_word='" . $_array ['n_word'] . "',
		m_brand='" . $_array ['n_brand'] . "',
		m_name='" . $_array ['m_name'] . "',
		m_jname='" . $_array ['m_jname'] . "',
		m_ename='" . $_array ['m_ename'] . "',
		m_prov='" . $_array ['m_prov'] . "',
		m_city='" . $_array ['m_city'] . "',
		m_subway='" . implode(',', $_array ['m_subway']) . "',
		m_fenlei='" . $_array ['m_fenlei'] . "',
		m_sefenlei='" . implode(',', $_array ['m_sefenlei']) . "',
		m_keyword='" . $_array ['m_keyword'] . "',
		m_pv='" . $_array ['m_pv'] . "',
		m_led='" . $_array ['m_led'] . "',
		m_site='" . $_array ['m_site'] . "',
		m_brief='" . $_array ['m_brief'] . "',";
        if (!empty($imgname)) {
            $this->sql .= "m_pic='" . $imgname . "',";
        }
        $this->sql .= "m_level='" . $_array ['m_level'] . "' where m_id=" . $_array ['id'];
		mysql_query($this->sql);
		//echo $this->sql;exit;
        return true;
    }
    
	public function getMall($p) {
        $this->sql="select * FROM s_mall left Join s_brand ON s_brand.b_id = s_mall.m_brand left Join s_zimu ON s_zimu.z_id = s_mall.m_word where 1=1";
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
                $smarty->assign("subwayselect", explode(",", $array [0] ['m_subway']));
                $smarty->assign("sefenleiselect", explode(",", $array [0] ['m_sefenlei']));
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }

        return false;
    }
	public function _deleteMall($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from s_mall where m_id=" . $nid;
            mysql_query($sql);
        }
    }
    public function getMall_fenlei($p){
    	$this->sql="select * from s_mall_fenlei order by mm_id desc ";
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
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }

        return false;
    }

}

?>