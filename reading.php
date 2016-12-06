<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Departure
 * Date: 2016/10/13
 * Time: 13:15
 */

$servername = "localhost";
$username = "root";
$password = "";

// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo '连接成功';


$tid = $_GET['tid'];
echo '你想看第' . $tid . '行留言';

$fn = fopen('message.txt', 'r');



