<?php
	//连接到加载好的数据库中
	require 'config.php';

	$query=mysql_query("SELECT user FROM blog_user WHERE user='{$_POST['user']}'") or die("SQL错误!");

	//判断数据库中是否有此条数据
	if(mysql_fetch_array($query,MYSQL_ASSOC)){
		sleep(3);
		echo 1;
	}

	//关闭数据库
	mysql_close();
?>