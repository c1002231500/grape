<?php
/**
 * User: falcon.x
 * Date: 11-6-27
 * Time: 下午4:32
 * To change this template use File | Settings | File Templates.
 */
require_once 'class.public_admin.php';
include_once 'interface.iDataBase.php';
class classes implements iDataBase{
    private $sql;
    function Add($object)
    {
        if(!empty($object['c_name'])){
        $this->sql="insert into s_class(c_name,c_status,)values('".$object['c_name']."',".$object['c_status'].")";
        mysql_query($this->sql);
        return  mysql_insert_id();
        }
        // TODO: Implement Add() method.
    }
	public function addClass($p,$imgname) {
        /*
         * 图片上传
         */
        if (!empty($p)) {
            $this->sql = sprintf("INSERT INTO s_class(c_name,c_pic)VALUES('%s','%s')", mysql_real_escape_string($p ['c_name']),mysql_real_escape_string($imgname));
            mysql_query($this->sql);
            return mysql_insert_id();
        }
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
	function _deleteClass($nid = NULL) {
        if (!empty($nid)) {
            $sql = "delete  from s_class where c_id=" . $nid;
            mysql_query($sql);
        }
    }

    function Get($id = null)
    {
        $this->sql ="select * from s_class where 1=1";
        if($id){
            $this->sql .=" $id";
        }
        $pub = new pub_admin ();
		$prepage=10;
        $pub->getpage($this->sql,$prepage);
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
	
    
	public function getClass($p) {
        $this->sql="select * FROM s_class where 1=1";
        if (!empty($p)) {
            $this->sql .= $p;
        }      
        echo $this->sql;
        $result = mysql_query($this->sql);


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
		//echo $this->sql;
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
	
	public function updatClass($_array, $imgname) {
        $this->sql = "UPDATE s_class SET c_name='" . $_array ['c_name'] . "',";
        if (!empty($imgname)) {
            $this->sql .= "c_pic='" . $imgname . "' where c_id=" . $_array ['id'];
        } 
		mysql_query($this->sql);
		//echo $this->sql;exit;
        return true;
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
        //$pub = new pub ();
		//$prepage=10;
       // $pub->getpage($this->sql,$prepage);
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
	function GetTapenumber()
	{
		$this->sql="select COUNT(*) as ti from s_type group by t_classid ";
		$result = mysql_query($this->sql);
		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
	}
	function GetTypeNews1()
	{
		$this->sql="select COUNT(n_id) as ti,t_name from s_type left join s_news on t_id=n_subclass where t_classid=1 GROUP BY t_id  ";
		$result = mysql_query($this->sql);
		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
	}
	function GetTypeNews2()
	{
		$this->sql="select COUNT(n_id) as ti,t_name from s_type left join s_news on t_id=n_subclass where t_classid=2 GROUP BY t_id  ";
		$result = mysql_query($this->sql);
		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
	}
	function GetTypeNews3()
	{
		$this->sql="select COUNT(n_id) as ti,t_name from s_type left join s_news on t_id=n_subclass where t_classid=3 GROUP BY t_id  ";
		$result = mysql_query($this->sql);
		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
	}
	function GetTypeNews4()
	{
		$this->sql="select COUNT(n_id) as ti,t_name from s_type left join s_news on t_id=n_subclass where t_classid=4 GROUP BY t_id  ";
		$result = mysql_query($this->sql);
		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
	}
	function GetTypeNews5()
	{
		$this->sql="select COUNT(n_id) as ti,t_name from s_type left join s_news on t_id=n_subclass where t_classid=5 GROUP BY t_id  ";
		$result = mysql_query($this->sql);
		$array = array ();
		while ( $s = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
			array_push ( $array, $s );
		}
		if (! empty ( $array ) && count ( $array ) > 0) {
			return $array;
		}
		return false;
	}
   	function GetAlljob()
    {
         $this->sql ="select * from s_job where 1=1";

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
    function GetAllage()
    {
         $this->sql ="select * from s_age where 1=1";

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
