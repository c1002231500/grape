<?php

require_once 'class.public.php';
require_once 'class.getfirstword.php';

class Zimu {

    private $sql;
	
	function GetAllZimu($id = null)
    {
         $this->sql ="select * from s_zimu where 1=1";
        if($id){
            $this->sql .=" $id";
        }
        $result = mysql_query($this->sql);
        $array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
        // TODO: Implement Get() method.
    }
    function GetBrandzimu($id = null)
    {
         $this->sql ="select b_id,b_jname,b_ename,z_id,z_name,b_cname from s_brand left join s_zimu on b_spell=z_name where 1=1";
        if($id){
            $this->sql .=" $id";
        }
        $result = mysql_query($this->sql);
        $array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
        // TODO: Implement Get() method.
    }
    
}

?>