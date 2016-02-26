$(document).ready(function(){
   page=1;
});
function  additem(type){
  /*通过ajax来获取数据库中的信息 获取的数据是从10*page +1 --10*(page+1) 条数据*/
  arr=[];
  var cate=type;
  $.ajax({
      type: "GET", //用POST方式传输
      dataType: "json", //数据格式:JSON
      async : false,
      url: './loading.php', //目标地址
      data: "page=" + page +"&cate=" + cate,
      success: function (msg){
               arr=msg.status;
      }
    });

  //调用函数regroup重组div
   regroup(arr);
   page +=1;
 
}
function changecontent(n){
  arr1=[];
  var cate = n;
  $.ajax({
    url:'./change.php?cate='+ n,
    type:'GET',
    async : false,
    dataType:'json',
    success:function(msg){
       arr1=msg.status;
      $(".news_list").remove();
    }

  });
  //调用函数regroup重组div
    regroup(arr1);
}

//将得到的数据重组成div添加到div中
function regroup(arr){
    var arr1=arr;
    if(arr1.length>0){
      for(var j=0;j<arr1.length;j++){
           var str='<div class="news_list">';
                  str += '<div class="news_left_img f_l">';
                  str += '<img src="admin/'+arr1[j].img+'"/>';
                  str += '</div>';
                  str += '<div class="news_right f_l">';             
                  str += '<div class="news_title">'+arr1[j].title+'</div>';
                  str += '<div class="news_abs">'+arr1[j].des+'</div>';
                  str += '<div class="news_right_bottom">';
                  str += '<div class="news_time f_l">'+arr1[j].time+'</div>';
                  if(arr1[j].source)  str += '<div class="news_cate f_r">'+arr1[j].source+'</div>';            
                  str += '</div>';
                  str += '</div>';
                  str += '<div class="clearfix"></div>';
                  str += '</div>';
                  $(".news_news").append(str);
      }
    }
}