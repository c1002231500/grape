<?php

require_once 'class.public.php';
require_once 'class.getfirstword.php';
require_once 'class.public_admin.php';

class Media {

    private $sql;

    public function __construct() {
        
    }
	public function addMedia($p, $imgname) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO s_media(m_word,m_brand,m_prov,m_city,m_sale,m_price,m_fenlei,m_keyword,m_url,m_meitifenlei,m_brief,m_age,m_sex,m_zhiye,m_level)
            VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", 
            mysql_real_escape_string($p ['n_word']),
            mysql_real_escape_string($p ['n_brand']),
            mysql_real_escape_string($p ['m_prov']),
            mysql_real_escape_string($p ['m_city']), 
            mysql_real_escape_string($p ['m_sale']),
            mysql_real_escape_string($p ['m_price']),
            mysql_real_escape_string($p ['m_fenlei']),
            mysql_real_escape_string($p ['m_keyword']),
            mysql_real_escape_string($p ['m_url']),
            mysql_real_escape_string($p ['m_meitifenlei']),
            mysql_real_escape_string($p ['m_brief']),
            mysql_real_escape_string(implode(",", $p ['m_age'])),
            mysql_real_escape_string($p ['m_sex']),
            mysql_real_escape_string(implode(",", $p ['m_zhiye'])),
            mysql_real_escape_string($p ['m_level']));           
            mysql_query($this->sql);
            //echo $this->sql;exit;
            return mysql_insert_id();
        }
    }
	public function updatMedia($_array, $imgname) {
        $this->sql = "UPDATE s_media SET 
		m_word='" . $_array ['n_word'] . "',
		m_brand='" . $_array ['n_brand'] . "',
		m_prov='" . $_array ['m_prov'] . "',
		m_city='" . $_array ['m_city'] . "',
		m_sale='" . $_array ['m_sale'] . "',
		m_price='" . $_array ['m_price'] . "',
		m_fenlei='" . $_array ['m_fenlei'] . "',
		m_keyword='" . $_array ['m_keyword'] . "',
		m_url='" . $_array ['m_url'] . "',
		m_meitifenlei='" . $_array ['m_meitifenlei'] . "',
		m_brief='" . $_array ['m_brief'] . "',
		m_age='" . implode(',', $_array ['m_age']) . "',
		m_sex='" . $_array ['m_sex'] . "',
		m_zhiye='" . implode(',', $_array ['m_zhiye']) . "',";
        $this->sql .= "m_level='" . $_array ['m_level'] . "' where m_id=" . $_array ['id'];
		mysql_query($this->sql);
		//echo $this->sql;exit;
        return true;
    }
    
	public function getMedia($p) {
        $this->sql="select * FROM s_media left Join s_brand ON s_brand.b_id = s_media.m_brand left Join s_zimu ON s_zimu.z_id = s_media.m_word where 1=1";
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
                $smarty->assign("ageselect", explode(",", $array [0] ['m_age']));
                $smarty->assign("jobselect", explode(",", $array [0] ['m_zhiye']));
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }

        return false;
    }
	public function _deleteMedia($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from s_media where m_id=" . $nid;
            mysql_query($sql);
        }
    }


}

?>