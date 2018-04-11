//载入layui组建
layui.use(['layer', 'form','element','laydate'], function(){
    var form = layui.form;
    var layer = layui.layer;
    var element = layui.element;
    var laydate = layui.laydate;
});

//用户登录方法
function login(){
    // 获取用户提交的信息
    var user = $("#user").val();
    var password = $("#password").val();

    $.post("../functions/Controller.php?type=login",{user:user,password:password},function(data,status){
        alert(data);
    });
}
