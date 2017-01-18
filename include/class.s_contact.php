<?php

require_once 'class.public_admin.php';
require_once 'class.public_japan.php';
require_once 'class.public_china.php';
require_once 'class.getfirstword.php';

class Contact {

    private $sql;
    private $table = "s_contact";

    public function __construct() {
        
    }

    public function addContact($p) {

        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO " .$this->table . "(c_class,c_area,c_name,c_company,c_url,c_phone,c_call,c_fax,c_email,c_content)VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", 
			mysql_real_escape_string($p ['c_class']),mysql_real_escape_string($p ['c_area']),mysql_real_escape_string($p ['c_name']),mysql_real_escape_string($p ['c_company']),mysql_real_escape_string($p ['c_url']),
			mysql_real_escape_string($p ['c_phone']),mysql_real_escape_string($p ['c_call']),mysql_real_escape_string($p ['c_fax']),mysql_real_escape_string($p ['c_email']),
			mysql_real_escape_string($p ['com']));
            mysql_query($this->sql);
            return mysql_insert_id();
        }
    }

    public function updateContact($_array) {
        $this->sql = "UPDATE s_contact 
		SET 
		c_class='" . $_array ['c_class'] . "',
		c_area='" . $_array ['c_area'] . "',
		c_name='" . $_array ['c_name'] . "',
		c_company='" . $_array ['c_company'] . "',
		c_url='" . $_array ['c_url'] . "',
		c_phone='" . $_array ['c_phone'] . "',
		c_call='" . $_array ['c_call'] . "',
		c_fax='" . $_array ['c_fax'] . "',
		c_email='" . $_array ['c_email'] . "',";
        $this->sql .= "c_content='" . $_array ['com'] . "' where c_id=" . $_array ['c_id'];
		mysql_query($this->sql);	
        return true;	
    }
	
    public function _deleteContact($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from " . $this->table . "  where c_id=" . $nid;
            mysql_query($sql);
        }
    }
	
    public function getContact($p) {
        $this->sql="select * from s_contact where 1=1";
        if (!empty($p)) {
            $this->sql .= $p;
        }
		$pub = new pub_admin ();
		$prepage=20;
        $pub->getpage($this->sql,$prepage);
        $result = mysql_query($this->sql);
        $array = array();
        while ($s = mysql_fetch_array($result, MYSQL_ASSOC)) {
            array_push($array, $s);
        }
        if (!empty($array) && count($array) > 0) {
            if (count($array) == 1) {
                global $smarty;  
            }
            return $array;
        }
        return false;
    }
?>