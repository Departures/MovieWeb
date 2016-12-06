<?php
/**
 * Created by PhpStorm.
 * User: Departure
 * Date: 2016/10/30
 * Time: 21:15
 */
$conn=mysqli_connect('localhost','root','!@#456&*(0-=');/*链接Databases*/
if(mysqli_connect_error())
{
    echo ("连接数据库失败!");
    exit();
}
else{
    mysqli_query($conn,'use mysql');/*选择数据库*/
}
