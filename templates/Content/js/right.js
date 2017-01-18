/**
 * User: falcon.x
 * Date: 11-6-29
 * Time: 下午1:41
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function() {
$("#contop ul li").addClass('odd');
$('#contop ul li:even').addClass('even'); //奇偶变色，添加样式

});

$(function(){
var scrtime;
$("#contop").hover(function(){
clearInterval(scrtime);

},function(){

scrtime = setInterval(function(){
var $ul = $("#contop ul");
var liHeight = $ul.find("li:last").height();
$ul.animate({marginTop : liHeight+40 +"px"},1000,function(){

$ul.find("li:last").prependTo($ul)
$ul.find("li:first").hide();
$ul.css({marginTop:0});
$ul.find("li:first").fadeIn(1000);
});
},3000);

}).trigger("mouseleave");


});