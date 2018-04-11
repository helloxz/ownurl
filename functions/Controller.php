<?php
    // 控制器
    // 载入类
    include_once("UserClass.php");
    $rule = new User;
    $type = $_GET['type'];
    switch ($type) {
        case 'login':
            // 用户登录时输入的信息
            $user = array(
                "user"      =>  $_POST['user'],
                "password"  =>  $_POST['password']
            );
            // 配置文件里面的用户信息
            $admin = array(
                "user"      =>  $admin['user'],
                "password"  =>  $admin['password']
            );
            $rule->login($user,$admin);
            break;
        
        default:
            # code...
            break;
    }
?>