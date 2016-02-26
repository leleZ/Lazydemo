$(document).ready(function(){
    $.ajax({
      type: "GET", //用POST方式传输
      dataType: "json", //数据格式:JSON
      async : false,
      url: './checklogin.php', //目标地址
      success: function (msg){
          if(msg.status != 0){
             alert("您还没有登录，请先登录！");
             window.location.href='login.html';
             exit;
          }
      }
    });
});
function check(){
    var title = trim($("#title").val());
    var author = trim($("#author").val());
    var source = trim($("#source").val());
    var cate = $("#cate").val();
    if(title == '' || author == '' || source == '' || cate == 0){
      alert("请将信息填写完整");
      return false; 
    }else{
      return true;
    }
    return false;
  }
   function trim(str){
        return str.replace(/(^\s*)|(\s*$)/g, "");
  }