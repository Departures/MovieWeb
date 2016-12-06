<!--/**-->
<!--* Created by PhpStorm.-->
<!--* User: Departure-->
<!--* Date: 2016/10/27-->
<!--* Time: 14:32-->
<!--*/-->
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
ob_start();
require('mysql.php');
if (isset($_POST["submit"])) {

    if (isset($_POST['username'])) {
        $userName = $_POST['username'];
    } else {
        $userName = null;
        echo "no username supplied";
    }
    if (isset($_POST['useremail'])) {
        $userEmail = $_POST['useremail'];
    } else {
        $userEmail = null;
        echo "no useremail supplied";
    }
    if (isset($_POST['userpassword'])) {
        $userPassWord = $_POST['userpassword'];
    } else {
        $userPassWord = null;
        echo "no userpassword supplied";
    }
    if (isset($_POST['userage'])) {
        $userAge = $_POST['userage'];
    } else {
        $userAge = null;
        echo "no userage supplied";
    }
    if (isset($_POST['userrepassword'])) {
        $userRepassWord = $_POST['userrepassword'];
    } else {
        $userRepassWord = null;
        echo "no userrepassword supplied";
    }
    if (isset($_POST['useraddress'])) {
        $userAddress = $_POST['useraddress'];
    } else {
        $userAddress = null;
        echo "no useraddress supplied";
    }
    if ($userPassWord && $userEmail && $userAge && $userAddress && $userName && $userRepassWord && $userPassWord) {
        if ($userPassWord !== $userRepassWord) {                                               /*检测两次密码是否一致*/
            echo "您两次输入的密码不一致，请重新输入！";
        }
//    elseif ()                                                                            /*检测email和电话号码是否符合规范*/
//    {
//
//    }
        else {
            $sql = "insert into user_information(user_name, user_password, user_email, user_address, user_age) VALUES ('$userName','$userPassWord','$userEmail','$userAddress','$userAge')";
            if (mysqli_query($conn, $sql)) {
                echo <<<tem
<script>
alert("注册成功！");
location.href='index.php';
</script>
tem;
            } else {
                echo <<<tem
<script>
alert("注册失败！");
location.href="index.php";
</script>
tem;
            }
        }
    } else{
        echo "获取表单失败！";
    }

}
header('Refresh:3;url=http://localhost/bs_01demo/src/index.php');
?>
</body>
</html>

