<?php
require_once 'class.public.php';
/**
 * User: falcon.x
 * Date: 11-6-27
 * Time: 下午4:32
 * To change this template use File | Settings | File Templates.
 */
class member{
    private $_p;
   public function __construct(){
        
    }

   public function Add($object,$rand)
    {
        $this->_p ="insert into s_user(u_uname,u_pwd,u_phone,u_email,u_level,u_status,u_issure)values('".$object['u_uname']."','".$object['u_pwd']."','".$object['u_phone']."','".$object['u_email']."',1,2,'".$rand."')";
        mysql_query($this->_p);
        return mysql_insert_id();
        // TODO: Implement Add() method.
    }

   public function Dele($id = null)
    {

        // TODO: Implement Dele() method.
    }

  public  function Get($id = null)
    {
        $this->_p ="select * from s_user where 1=1";

        if(!empty($id)){
            $this->_p.="$id";
        }
        
        $result = mysql_query($this->_p);
        $array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
        
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
        }
        // TODO: Implement Get() method.
    }
    
   public function Update($object, $id)
    {
        $this->_p="update s_user set u_uname='".$object[u_uname]."',u_phone='".$object[u_phone]."',u_email='".$object[u_email]."',u_level=$object[u_level],u_status=$object[u_status]";
        if(!empty($object['u_pwd'])||!empty($object['u_pwd2'])){
            if($object['u_pwd']==$object['u_pwd2']){
            $this->_p.=" ,u_pwd='".$object[u_pwd]."'";
            }
        }
        $this->_p.="  where u_id=$id";
        mysql_query($this->_p);
        // TODO: Implement Update() method.
    }

    public function UpdateStatus($object,$id){
         $this->_p="update s_user set u_status=1 where u_id=$id and u_issure='".$object['_r']."'";
        mysql_query($this->_p);
        return mysql_affected_rows();
    }



}
