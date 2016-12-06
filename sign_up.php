<!--注册界面-->
<!--Created by PhpStorm.-->
<!-- User: Departure-->
<!--Date: 2016/10/27-->
<!--Time: 12:38-->
<html>
<head>

    <meta charset="UTF-8">
    <style>
        .div {
            background-color: lightblue;
            align-items: center;
            width: 400px;
            height: 250px;
        }

        .form {
            margin-inside: auto;
            margin-outside: auto;
            margin: 200px 100px;
            align-items: center;
        }
    </style>
</head>
<body>
<?php
require('mysql.php');
?>
<div class="div">
    <form method="post" action="dealLogn_in.php" class="form">
        <label
            for="username">用<span>&nbsp;&nbsp;&nbsp;</span>户<span>&nbsp;&nbsp;&nbsp;</span>名:<span>&nbsp;</span></label>
        <input type="text" name="username" id="username" placeholder="Departure"><br>
        <label for="useremail">邮箱/电话：</label>
        <input type="email" name="useremail" id="useremail" placeholder="example@gmail.com"><br>
        <label for="userage">您的年龄：</label>
        <input type="text" name="userage" id="userage"><br>
        <label for="useraddress">您的住址：</label>
        <input type="text" name="useraddress" id="useraddress" placeholder="省/市/区/县"><br>
        <label for="userpassword">密<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>码：</label>
        <input type="password" id="userpassword" name="userpassword"><br>
        <label for="userrepassword">确认密码<span>&nbsp;</span>：</label>
        <input type="password" name="userrepassword" id="userrepassword"><br>

        <input type="submit" name="submit" value="注册" onclick="check()">
        <input type="reset" value="重置" name="reset">
    </form>
</div>

</body>

</html>