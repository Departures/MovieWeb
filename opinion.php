<?php
if (isset($_POST['submit'])) {
    if (isset($_POST["title"])) {
        $title = $_POST['title'];
    } else {
        $title = null;
        echo "no title supplied";
    }
    if (isset($_POST['content'])) {
        $content = $_POST['content'];
    } else {
        $content = null;
        echo "no content supplied";
    }
    $ip = $_SERVER['REMOTE_ADDR'];
    $conn = mysqli_connect('localhost', 'root', '!@#456&*(0-=');
    if (mysqli_connect_error()) {
        echo("连接数据库失败!");
        exit();
    }
    mysqli_query($conn, 'use mysql');
    @$sql = "insert into user_message(title,content,ip) VALUES ('$title','$content','$ip')";
//echo $sql;
//var_dump(mysqli_query($conn, $sql));
    if (mysqli_query($conn, $sql)) {
        echo <<<tem
<script>
alert("留言成功！");
location.href='index.php';
</script>
tem;
    } else {
        echo <<<tem
<script>
alert("留言失败！");
location.href="index.php";
</script>
tem;

    }

}else{
    echo "提交失败！";
}


