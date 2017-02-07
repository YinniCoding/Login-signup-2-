<?php
  header("Content_Type: text/html; charset=utf8");

  if (!isset($_POST['submit'])) {
  	exit("错误执行");
  } //判断是否有submit操作

  $name=$_POST['name'];//post表单获取name
  $passward=$_POST['passward']; //post获取表单里的passward

  include('connect.php');  //连接数据库
   if($name && $passward) {
   	$q="insert into user(id,username,passward) values (null,'$name','$passward')";  //向表中插入数据
  $result=mysql_query($q,$con);//执行sql

  if (!$result) {
  	die('Error:'.mysql_error());//执行sql失败则报错
  	# code...
  } else{
  	echo "注册成功！2s后跳转至登录页面。";
  	echo "<script>setTimeout(function(){window.location.href='/登录注册0207_demo01/login.html';},2000);</script>";
  }
   }
   else {echo "用户名或密码不能为空！2s后跳转至注册页面。";
  echo "<script>setTimeout(function(){window.location.href='/登录注册0207_demo01/signup.html';},2000);</script>";}
  mysql_close();
  ?>