<?php
/**
 * User: falcon.x
 * Date: 11-6-27
 * Time: 上午10:11
 * To change this template use File | Settings | File Templates.
 */
 
interface iDataBase {
     function Add($object);
     function Dele($id=null);
     function Update($object,$id);
     function Get($id=null);
}
