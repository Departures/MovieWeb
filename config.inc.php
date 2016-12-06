<?php
/**
 * Created by PhpStorm.
 * User: Departure
 * Date: 2016/10/31
 * Time: 16:49
 */
session_start();
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PW','!@#456&*(0-=');
define('DB_NAME','user_message');
define('DB_CHARSET','utf8');
define('DB_PCONNECT',0);
define('DB_DATABASE','mysql');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PW)or die('连接数据库失败！');
mysqli_select_db($con,DB_NAME);
