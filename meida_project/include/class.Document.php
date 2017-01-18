<?php
/**
 * User: falcon.x
 * Date: 11-6-27
 * Time: 上午10:11
 * To change this template use File | Settings | File Templates.
 */
 include_once 'iDataBase.php';
define("data","s_document");
class Document implements  iDataBase{
//public static $my_static = 's_document';
    public function Add($object)
    {
        if($object){
            $sql ="insert into ".data."(d_title,d_content,d_type,	d_systime,d_createtime)values('".$object['d_title']."','".$object['d_content']."','".$object['d_type']."',".mktime().",".mktime().")";
            mysql_query($sql);
            return mysql_insert_id();
        }
    }

    function Dele($id = null)
    {
        // TODO: Implement Dele() method.
    }

    function Get($id = null)
    {
        // TODO: Implement Get() method.
    }

    function Update($object, $id)
    {
        // TODO: Implement Update() method.
    }
}
