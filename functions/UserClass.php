<?php
    // 载入配置文件
    include_once("../config.php");

    class User{
        // 用户登录，两个参数，一个是用户输入，一个是配置文件里面的用户信息
        function login($user,$admin){
            
            // 用户输入的信息进行md5加密和对比
            $user = md5($user['user'].$user['password']);
            $admin = md5($admin['user'].$admin['password']);

            // 判断用户名密码是否正确
            if($user != $admin){
                echo '用户名或密码不正确！';
                exit;
            }
            else{
                echo '登录成功';
            }
        }
    }
?>