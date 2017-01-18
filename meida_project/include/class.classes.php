<?php
/**
 * User: falcon.x
 * Date: 11-6-27
 * Time: 下午4:32
 * To change this template use File | Settings | File Templates.
 */
 require_once 'class.public.php';
include_once 'interface.iDataBase.php';
class classes implements iDataBase{
    private $sql;
    function Add($object)
    {
        if(!empty($object['c_name'])){
        $this->sql="insert into s_class(c_name,c_status)values('".$object['c_name']."',".$object['c_status'].")";
        mysql_query($this->sql);
        return  mysql_insert_id();
        }
        // TODO: Implement Add() method.
    }

    function Dele($id = null)
    {
        try{
            $this->sql ="delete from s_class where c_id=".$id;
            mysql_query($this->sql);
        }catch(Exception $s){
           echo $s->getMessage();
           exit;
        }

        // TODO: Implement Dele() method.
    }

    function Get($id = null)
    {
         $this->sql ="select * from s_class where 1=1";
        if($id){
            $this->sql .=" $id";
        }
        $pub = new pub ();
        $pub->getpage($sql,20);
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

    function GetAllCalss($id = null)
    {
         $this->sql ="select * from s_class where 1=1";
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

    function Update($object, $id)
    {
        try{
            if(!empty($object)&&!empty($id)){
                 $this->sql="update s_class set c_name='".$object['name']."',c_status=".$object['static']." where c_id=".$id;
                 mysql_query($this->sql);
            }
        }catch(Exception $s){
            echo $s->getMessage();
            exit;
        }

        // TODO: Implement Update() method.
    }



    /***********************************小类操作*************************************************/
    function AddStyle($object)
    {
        if(!empty($object['t_name'])){
        $this->sql="insert into s_type(t_name,t_status,t_classid)values('".$object['t_name']."',".$object['t_status'].",".$object['classid'].")";
        mysql_query($this->sql);
        return  mysql_insert_id();
        }
        // TODO: Implement Add() method.
    }

    function DeleStyle($id = null)
    {
        try{
            $this->sql ="delete from s_type where t_id=".$id;
            mysql_query($this->sql);
        }catch(Exception $s){
           echo $s->getMessage();
           exit;
        }

        // TODO: Implement Dele() method.
    }

    function GetStyle($id = null)
    {
         $this->sql ="select * from s_type where 1=1";
        if($id){
            $this->sql .=" $id";
        }
        $pub = new pub ();
        $pub->getpage($sql,20);
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

    function GetAllType($p = null)
    {
         $this->sql ="select * from s_type where 1=1";
        if($p){
            $this->sql .=" $p";
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

    function UpdateStyle($object, $id)
    {
        try{
            if(!empty($object)&&!empty($id)){
                 $this->sql="update s_type set t_name='".$object['name']."',t_status=".$object['static']." where t_id=".$id;
                 mysql_query($this->sql);
            }
        }catch(Exception $s){
            echo $s->getMessage();
            exit;
        }

        // TODO: Implement Update() method.
    }

}
