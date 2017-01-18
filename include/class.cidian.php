<?php

require_once 'class.public.php';
require_once 'class.getfirstword.php';

class Cidian {

    private $sql;
	
    public function getCidian($p) {
        $this->sql="select * from (select t1.c_name,t1.t_name,t1.c_id,t1.t_id,s_brand.b_brief,s_brand.b_cbrief,s_brand.b_cname,s_brand.b_jname,s_brand.b_keyword,s_brand.b_pianjia,s_brand.b_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t1 left join s_brand on t1.t_id=s_brand.b_type)as a1,(select t2.c_name,t2.t_name,t2.c_id,t2.t_id,s_people.p_jbrief,s_people.p_zbrief,s_people.p_cname,s_people.p_jname,s_people.p_keyword,s_people.p_pianjia,s_people.p_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t2 left join s_people on t2.t_id=s_people.p_type) as a2,(select t3.c_name,t3.t_name,t3.c_id,t3.t_id,s_guyou.g_jbrief,s_guyou.g_zbrief,s_guyou.g_cname,s_guyou.g_jname,s_guyou.g_keyword,s_guyou.g_pianjia,s_guyou.g_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t3 left join s_guyou on t3.t_id=s_guyou.g_type)as a3 where 1=1";
        //$this->sql="SELECT * from (SELECT * from (select * from s_brand left join s_class on s_class.c_id=s_brand.b_class) as t1 left join s_type on t1.b_type = s_type.t_id order by t1.b_id desc)as t2 where 1=1 ";
    	
	    $res = mysql_query("select count(*) from (select t1.c_name,t1.t_name,t1.c_id,t1.t_id,s_brand.b_brief,s_brand.b_cbrief,s_brand.b_cname,s_brand.b_jname,s_brand.b_keyword,s_brand.b_pianjia,s_brand.b_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t1 left join s_brand on t1.t_id=s_brand.b_type)as a1,(select t2.c_name,t2.t_name,t2.c_id,t2.t_id,s_people.p_jbrief,s_people.p_zbrief,s_people.p_cname,s_people.p_jname,s_people.p_keyword,s_people.p_pianjia,s_people.p_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t2 left join s_people on t2.t_id=s_people.p_type) as a2,(select t3.c_name,t3.t_name,t3.c_id,t3.t_id,s_guyou.g_jbrief,s_guyou.g_zbrief,s_guyou.g_cname,s_guyou.g_jname,s_guyou.g_keyword,s_guyou.g_pianjia,s_guyou.g_pinyin from (select c_name,t_name,t_id, c_id from s_class left join s_type on c_id=t_classid) as t3 left join s_guyou on t3.t_id=s_guyou.g_type)as a3");
		$row = mysql_fetch_array($res);
		$_SESSION['countcidian'] = $row[0];
        
		$pub = new pub ();
        $pub->getpage($this->sql, 10);
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
}

?>