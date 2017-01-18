<?php

require_once 'class.public.php';
require_once 'class.getfirstword.php';
require_once 'class.public_admin.php';

class Human {

    private $sql;
    private $table = "s_human";

    public function __construct() {
        
    }

    public function addHuman($p, $imgname) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO " .$this->table . "(p_cname,p_pinyin,p_jname,p_pianjia,p_ename,p_sex,p_country,p_birth,p_death,p_classification,p_cbrief,p_brief,p_pic,p_groupage,p_popular,p_pro,p_social,p_hist,p_image,p_fishion,p_story,p_risk,p_cost,p_keyword,p_recommend,p_status)VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", 
            mysql_real_escape_string($p ['p_cname']),
            mysql_real_escape_string($p ['p_pinyin']),
            mysql_real_escape_string($p ['p_jname']),
            mysql_real_escape_string($p ['p_pianjia']),  
            mysql_real_escape_string($p ['p_ename']),
            mysql_real_escape_string($p ['p_sex']),
            mysql_real_escape_string($p ['p_country']),
            mysql_real_escape_string($p ['p_birth']),
            mysql_real_escape_string($p ['p_death']),
            mysql_real_escape_string(implode(",", $p ['p_classification'])),
            mysql_real_escape_string($p ['p_cbrief']),
            mysql_real_escape_string($p ['p_brief']),
            mysql_real_escape_string($imgname),
            mysql_real_escape_string(implode(",", $p ['p_groupage'])),
            mysql_real_escape_string($p ['p_popular']),
            mysql_real_escape_string($p ['p_pro']),
            mysql_real_escape_string($p ['p_social']),
            mysql_real_escape_string($p ['p_hist']),
            mysql_real_escape_string($p ['p_image']),
            mysql_real_escape_string($p ['p_fishion']),
            mysql_real_escape_string($p ['p_story']),
            mysql_real_escape_string($p ['p_risk']),
            mysql_real_escape_string($p ['p_cost']),
            mysql_real_escape_string($p ['p_keyword']),
            mysql_real_escape_string($p ['p_recommend']),
            mysql_real_escape_string($p ['p_status']));
            
            mysql_query($this->sql);
            //echo $this->sql;exit;
            return mysql_insert_id();
        }
    }

    public function updatHuman($_array, $imgname) {
        $this->sql = "UPDATE " . $this->table . " 
		SET 
		p_cname='" . $_array ['p_cname'] . "',
		p_pinyin='" . $_array ['p_pinyin'] . "',
		p_jname='" . $_array ['p_jname'] . "',
		p_pianjia='" . $_array ['p_pianjia'] . "',
		p_ename='" . $_array ['p_ename'] . "',
		p_sex='" . $_array ['p_sex'] . "',
		p_country='" . $_array ['p_country'] . "',
		p_birth='" . $_array ['p_birth'] . "',
		p_death='" . $_array ['p_death'] . "',
		p_classification='" . implode(',', $_array ['p_classification']) . "',
		p_cbrief='" . $_array ['p_cbrief'] . "',
		p_brief='" . $_array ['p_brief'] . "',
		p_groupage='" . implode(',', $_array ['p_groupage']) .  "',
		p_popular='" . $_array ['p_popular'] . "',
		p_pro='" . $_array ['p_pro'] . "',
		p_social='" . $_array ['p_social'] . "',
		p_hist='" . $_array ['p_hist'] . "',
		p_image='" . $_array ['p_image'] . "',
		p_fishion='" . $_array ['p_fishion'] . "',	
		p_story='" . $_array ['p_story'] . "',	
		p_risk='" . $_array ['p_risk'] . "',	
		p_cost='" . $_array ['p_cost'] . "',	
		p_keyword='" . $_array ['p_keyword'] . "',	
		p_recommend='" . $_array ['p_recommend'] . "',";
        if (!empty($imgname)) {
            $this->sql .= "p_pic='" . $imgname . "',";
        }
        $this->sql .= "p_status='" . $_array ['p_status'] . "' where p_id=" . $_array ['id'];
		mysql_query($this->sql);
		//echo $this->sql;exit;
        return true;
    }

    public function _deleteHuman($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from " . $this->table . "  where p_id=" . $nid;
            mysql_query($sql);
        }
    }
	
    public function getHuman($p) {
        $this->sql="select * FROM s_job left Join s_human ON s_job.y_id = s_human.p_classification  left join s_country on s_human.p_country = s_country.r_zcountry where 1=1";
        if (!empty($p)) {
            $this->sql .= $p;
        } 
        $this->sql .=" order by p_id desc";      
		$pub = new pub_admin ();
		$prepage=10;
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
                $smarty->assign("jobselect", explode(",", $array [0] ['p_classification']));
                $smarty->assign("ageselect", explode(",", $array [0] ['p_groupage']));
            }
			//$_SESSION['countbrand']=count($array);
            return $array;
        }

        return false;
    }



}

?>