/**
 * Created by John on 2015/11/25.
 */
//百度登录导航栏下拉框隐藏显示设置
$(".s-weather-wrapper").mouseover(function(){
    $(".s-mod-setweather").css("display","block");
});
//$(".s-weather-wrapper").mouseout(function(){
//    $(".s-mod-setweather").css("display","none");
//});
//$(".s-mod-setweather").mouseover(function(){
//    $(".s-mod-setweather").css("display","block");
//});
$(".s-mod-setweather").mouseout(function(){
    $(".s-mod-setweather").css("display","none");
});

$(".s-user-name-top").mouseover(function(){
   $("#s_user_name_menu").css("display","block");
});
$(".s-user-name-top").mouseout(function(){
    $("#s_user_name_menu").css("display","none");
});
$("#s_user_name_menu").mouseover(function(){
    $("#s_user_name_menu").css("display","block");
});
$("#s_user_name_menu").mouseout(function(){
    $("#s_user_name_menu").css("display","none");
});

$("#s_usersetting_top").mouseover(function(){
    $(".bdpfmenu").css("display","block");
});
$("#s_usersetting_top").mouseout(function(){
    $(".bdpfmenu").css("display","none");
});
$(".bdpfmenu").mouseover(function(){
    $(".bdpfmenu").css("display","block");
});
$(".bdpfmenu").mouseout(function(){
    $(".bdpfmenu").css("display","none");
});

$(".s_bri").mouseover(function(){
    $(".s_bdbri").css("display","block");
});
$(".s_bri").mouseout(function(){
    $(".s_bdbri").css("display","none");
});
$(".s_bdbri").mouseover(function(){
    $(".s_bdbri").css("display","block");
});
$(".s_bdbri").mouseout(function(){
    $(".s_bdbri").css("display","none");
});


$("#s_menu_mine").click(function(){
    $(".s-block-container").css("display","block");
    $(".s-content").css("display","none");
    $(".s-content-nav").css("display","none");
    $(".s-content-video").css("display","none");
    $(".s-content-shopping").css("display","none");
});
$(".recommend").click(function(){
    $(".s-block-container").css("display","none");
    $(".s-content").css("display","block");
    $(".s-content-nav").css("display","none");
    $(".s-content-video").css("display","none");
    $(".s-content-shopping").css("display","none");
});
$(".navigation").click(function(){
    $(".s-block-container").css("display","none");
    $(".s-content").css("display","none");
    $(".s-content-nav").css("display","block");
    $(".s-content-video").css("display","none");
    $(".s-content-shopping").css("display","none");
});
$(".video").click(function(){
    $(".s-block-container").css("display","none");
    $(".s-content").css("display","none");
    $(".s-content-nav").css("display","none");
    $(".s-content-video").css("display","block");
    $(".s-content-shopping").css("display","none");
});
$(".shoppping").click(function(){
    $(".s-block-container").css("display","none");
    $(".s-content").css("display","none");
    $(".s-content-nav").css("display","none");
    $(".s-content-video").css("display","none");
    $(".s-content-shopping").css("display","block");
});

$(".title-link").mouseover(function(){
    $(".v-detail").css("display","block");
});
$(".v-detail").mouseout(function(){
    $(".v-detail").css("display","none");
});


$(".adO").mouseover(function(){
    $(".textO").css("display","block");
});
$(".adO").mouseout(function(){
    $(".textO").css("display","none");
});
$(".adT").mouseover(function(){
    $(".textT").css("display","block");
});
$(".adT").mouseout(function(){
    $(".textT").css("display","none");
});

$(".img").mouseover(function(){
    $(".mask").css("display","block");
});
$(".img").mouseout(function(){
    $(".mask").css("display","none");
});