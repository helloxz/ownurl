<?php
    // 载入头部
    include_once("../tpl/admin/header.php");
?>
    <!-- 内容部分 -->
<div id="container">
    <div class="layui-container">
        <div class="layui-row">
            <div class="layui-col-lg6 layui-col-md-offset3">
                <!-- 登录表单 -->
                <div class="login">
                    <div class="layui-form-item">
                        <label class="layui-form-label">用户名</label>
                        <div class="layui-input-block">
                        <input id = "user" type="text" name="title" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码</label>
                        <div class="layui-input-block">
                        <input id = "password" type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="formDemo" onclick = "login()">登录</button>
                        </div>
                    </div>
                </div>
                <!-- 登录表单END -->
            </div>
        </div>
    </div>
</div>
    <!-- 内容部分end -->
<?php
    // 载入页脚
    // 载入头部
    include_once("../tpl/admin/footer.php");
?>

