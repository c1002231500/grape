/**
 * User: falcon.x
 * Date: 11-6-28
 * Time: 下午4:36
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
    $("#n_word").change(
            function(){
                $("#sbrand").load("/admin.php?action=loadBrand1&zid="+ $("#n_word").val());
            }
    );
});
