/**
 * User: falcon.x
 * Date: 11-6-28
 * Time: 下午4:36
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
    $("#n_class").change(
            function(){
                $("#stype").load("/admin.php?action=loadType&cid="+ $("#n_class").val());
            }
    );
});