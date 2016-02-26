$(document).ready(function(){
   page=0;
});
function  additem(){
  page +=1;
  /*通过ajax来获取数据库中的信息 获取的数据是从10*page +1 --10*(page+1) 条数据*/
  dateImg={};
  $.ajax({
          type: "POST", //用POST方式传输
          dataType: "json", //数据格式:JSON
          url: '../loading.php', //目标地址
          data: "page=" + page,
         /* error: function (XMLHttpRequest, textStatus, errorThrown) { },*/
          success: function (msg){
          alert(msg.status);
          
        
          }
        });
    
  console.log(page);
  var dateImg={"date":[[{"src":"1.jpg"},{"title":"ceshi1"},{"describe":"****"},{"time":"123489"},{"source":""}],[{"src":"2.jpg"},{"title":"ceshi2"},{"describe":"****"},{"time":"123489"},{"source":""}]]};
  
dateImg= { [0]=> array(4) { ["title"]=> string(10) "测试1233" ["des"]=> string(27) "111111111111111111111111111" ["time"]=> string(10) "1447926232" ["source"]=> string(9) "人人333" } [1]=> array(4) { ["title"]=> string(11) "11111111111" ["des"]=> string(29) "11111111111111111111111111111" ["time"]=> string(10) "1447922047" ["source"]=> string(4) "1111" } }

  $.each(dateImg.date,function(index,value){
     
  console.log(value[4].source);

            var str='<div class="news_list">';
            str += '<div class="news_left_img f_l">';
            str += '<img src="images/'+value[0].src+'"/>';
            str += '</div>';
            str += '<div class="news_right f_l">';             
            str += '<div class="news_title">'+value[1].title+'</div>';
            str += '<div class="news_abs">'+value[2].describe+'</div>';
            str += '<div class="news_right_bottom">';
            str += '<div class="news_time f_l">'+value[3].time+'</div>';
            if(value[4].source)  str += '<div class="news_cate f_r">'+value[4].source+'</div>';            
            str += '</div>';
            str += '</div>';
            str += '<div class="clearfix"></div>';
            str += '</div>';
            $(".news_news").append(str);
        
  });
  
}

function checkall(){

  
}

