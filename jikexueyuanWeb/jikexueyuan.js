/**
 * Created by John on 2015/12/22.
 */


$(document).ready(function(){
    $("input").focus(function(){
        $(".search-btn").addClass("search-btn2");
        $(".hot-words").css("display","none");
    });
    $("input").blur(function(){
        $(".search-btn").removeClass("search-btn2");
        $(".hot-words").css("display","block");
    });
});
$(document).ready(function(){
    $(".search-btn").mousemove(function() {
        $(".search-btn").addClass("search-btn2");
    });
    $(".search-btn").mouseout(function() {
        $(".search-btn").removeClass("search-btn2");
    });
});

$(document).ready(function(){
    $(".navbox").mouseover(function(){
        $(".navpanel").css("display","block");
    });
    $(".navbox").mouseout(function(){
        $(".navpanel").css("display","none");
    });
})
$(document).ready(function() {
    $(".navbox-item:eq(1)").mouseover(function (){
        $(".panel-item:eq(0)").css("background-color", "rgb(247,247,247)")
    });
    $(".navbox-item:eq(1)").mouseout(function (){
        $(".panel-item:eq(0)").css("background-color", "white")
    });
    $(".navbox-item:eq(2)").mouseover(function (){
        $(".panel-item:eq(1)").css("background-color", "rgb(247,247,247)")
    });
    $(".navbox-item:eq(2)").mouseout(function (){
        $(".panel-item:eq(1)").css("background-color", "white")
    });
    $(".navbox-item:eq(3)").mouseover(function (){
        $(".panel-item:eq(2)").css("background-color", "rgb(247,247,247)")
    });
    $(".navbox-item:eq(3)").mouseout(function (){
        $(".panel-item:eq(2)").css("background-color", "white")
    });
    $(".navbox-item:eq(4)").mouseover(function (){
        $(".panel-item:eq(3)").css("background-color", "rgb(247,247,247)")
    });
    $(".navbox-item:eq(4)").mouseout(function (){
        $(".panel-item:eq(3)").css("background-color", "white")
    });
});

$(document).ready(function() {
    $(".nav1").mouseover(function(){
        $(".list1").css("display","block");
    });
    $(".nav1").mouseout(function(){
        $(".list1").css("display","none");
    });
    $(".nav2").mouseover(function(){
        $(".list2").css("display","block");
    });
    $(".nav2").mouseout(function(){
        $(".list2").css("display","none");
    });
    $(".nav3").mouseover(function(){
        $(".list3").css("display","block");
    });
    $(".nav3").mouseout(function(){
        $(".list3").css("display","none");
    });
});

$(document).ready(function() {
   $(".first").bind("mouseenter",function(){
        $(".question").css("display","block");
        $(".start-list").css("display","none");
    });
    $(".question").bind("mouseleave",function(){
       $(".start-list").css("display","block");
       $(".tab-content").css("display","none");
    })
    $(".second").bind("mouseenter",function(){
        $(".wiki").css("display","block");
        $(".start-list").css("display","none");
    });
    $(".wiki").bind("mouseleave",function(){
        $(".start-list").css("display","block");
        $(".tab-content").css("display","none");
    })
    $(".third").bind("mouseenter",function(){
        $(".lession").css("display","block");
        $(".start-list").css("display","none");
    });
    $(".lession").bind("mouseleave",function(){
        $(".start-list").css("display","block");
        $(".tab-content").css("display","none");
    })
    $(".fourth").bind("mouseenter",function(){
        $(".group").css("display","block");
        $(".start-list").css("display","none");
    });
    $(".group").bind("mouseleave",function(){
        $(".start-list").css("display","block");
        $(".tab-content").css("display","none");
    })
});
/*图片轮播*/
$(".strategy").mouseenter(function(){
    $("#banner-left3").css("display","block");
    $("#banner-right3").css("display","block");
});
$(".strategy").mouseleave(function(){
    $("#banner-left3").css("display","none");
    $("#banner-right3").css("display","none");
});
$(".index-banner").mouseenter(function(){
    $("#banner-left").css("display","block");
    $("#banner-right").css("display","block");
});
$(".index-banner").mouseleave(function(){
    $("#banner-left").css("display","none");
    $("#banner-right").css("display","none");
});
$(".swiper-car-box").mouseenter(function(){
    $("#banner-left4").css("display","block");
    $("#banner-right4").css("display","block");
});
$(".swiper-car-box").mouseleave(function(){
    $("#banner-left4").css("display","none");
    $("#banner-right4").css("display","none");
});
function DY_scroll1(wraper,prev,next,img,speed,or)
{
    var wraper = $(wraper);
    var prev = $(prev);
    var next = $(next);
    var img = $(img).find('div');
    var w = img.find('a').outerWidth(true);
    var s = speed;
    next.click(function()
    {
        img.animate({'margin-left':-w},function()
        {
            img.find('a').eq(0).appendTo(img);
            img.css({'margin-left':0});
        });
    });
    prev.click(function()
    {
        img.find('a:last').prependTo(img);
        img.css({'margin-left':-w});
        img.animate({'margin-left':0});
    });
    if (or == true)
    {
        ad = setInterval(function() { next.click();},s*1000);
        wraper.hover(function(){clearInterval(ad);},function(){ad = setInterval(function() { next.click();},s*1000);});
    }
}
DY_scroll1('.banner-box','#banner-left','#banner-right','.swiper-wrapper',4,true);
DY_scroll1('.startegy-box','#banner-left3','#banner-right3','.swiper-strategy',4,false);
DY_scroll1('.swiper-car-box','#banner-left4','#banner-right4','.swiper-car',4,false);

$(".focuswork-wrap").mouseenter(function(){
    $(".arrow1").css("display","block");
});
$(".focuswork-wrap").mouseleave(function(){
    $(".arrow1").css("display","none");
});
function DY_scroll2(wraper,prev,next,img,speed,or)
{
    var wraper = $(wraper);
    var prev = $(prev);
    var next = $(next);
    var img = $(img).find('ul');
    var w = img.find('li').outerWidth(true);
    var s = speed;
    next.click(function()
    {
        img.animate({'margin-left':-w},function()
        {
            img.find('li').eq(0).appendTo(img);
            img.css({'margin-left':0});
        });
    });
    prev.click(function()
    {
        img.find('li:last').prependTo(img);
        img.css({'margin-left':-w});
        img.animate({'margin-left':0});
    });
    if (or == true)
    {
        ad = setInterval(function() { next.click();},s*1000);
        wraper.hover(function(){clearInterval(ad);},function(){ad = setInterval(function() { next.click();},s*1000);});
    }
}
DY_scroll2('.focuswork-wrap','#banner-left2','#banner-right2','.img-list',3,false);

//课程推荐
function explain(box,play,infor,exp) {
    var box=$(box);
    var play=$(play);
    var infor=$(infor);
    var exp=$(exp);

    box.mouseenter(function () {
        play.css("opacity", "1");
        infor.css("height", "175px");
        exp.css("height", "52px");
        exp.css("opacity", "1");
        exp.css("display", "block");
    });
    box.mouseleave(function () {
        play.css("opacity", "0");
        infor.css("height", "88px");
        exp.css("height", "0px");
        exp.css("opacity", "0");
        exp.css("display", "none");
    });
}
explain('.bgbox1','.lessonplay1','.lesson-infor1','.exp1');
explain('.bgbox2','.lessonplay2','.lesson-infor2','.exp2');
explain('.bgbox3','.lessonplay3','.lesson-infor3','.exp3');
explain('.bgbox4','.lessonplay4','.lesson-infor4','.exp4');

//翻转效果

//品牌翻转
var turn = function(target,time,opts){
    target.find('a').hover(function(){
        $(this).find('.front').stop().animate(opts[0],time,function(){
            $(this).hide().next().show();
            $(this).next().animate(opts[1],time);
        });
    },function(){
        $(this).find('.back').animate(opts[0],time,function(){
            $(this).hide().prev().show();
            $(this).prev().animate(opts[1],time);
        });
    });
}
var verticalOpts = [{'width':'0px'},{'width':'167px'}];
turn($('.card-transform'),100,verticalOpts);

//精品课程
function intro(card,des) {
    var card=$(card);
    var des=$(des);
    card.mouseenter(function () {
        des.css("opacity", "20");
        card.css("opacity", "0.8");
    });
    card.mouseleave(function () {
        des.css("opacity", "0");
        card.css("opacity", "1");
    });
}
intro(".card1",".describe1")
intro(".card2",".describe2")
intro(".card3",".describe3")
intro(".card4",".describe4")

