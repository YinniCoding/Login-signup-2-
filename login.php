<?php
 header("Content_Type: text/html; charset=utf8");

   if (!isset($_POST['submit'])) {
  	exit("错误执行");
  	# code...
  } //判断是否有submit操作

  include('connect.php');//连接数据库表
  $name = $_POST['name'];
  $passward = $_POST['passward'];

  if($name && $passward) {
  	$sql = "select * from user where username='$name' and passward='$passward'";//检测数据库中是否有对应的用户名和密码
  	$result = mysql_query($sql);
  	$rows=mysql_num_rows($result);
  	if($rows)
  	{
  		echo "用户名及密码匹配，登陆成功！2s后自动跳转至欢迎界面。";
  		//header("refresh:0;url=welcome.html");
  		echo "<script>setTimeout(function(){window.location.href='/登录注册0207_demo01/welcome.html';},2000);</script>";
  	    exit();
  	}
  	else {
  		echo "用户名或者密码错误。2s后自动跳转至登录界面。";
  		echo "<script>setTimeout(function(){window.location.href='/登录注册0207_demo01/login.html';},2000);</script>";
  	}
  }
  else {
  	echo "用户名或密码不能为空。2s后自动跳转至登录界面。";
  	echo "<script>setTimeout(function(){window.location.href='/登录注册0207_demo01/login.html';},2000);</script>";
  }
  mysql_close();
  ?>