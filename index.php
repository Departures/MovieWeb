<!DOCTYPE html>
<html lang="en">
<head>
    <!--<script>
        function Check() {
            var name = document.login.myName.value;
            var password = document.login.password.value;
            if (name == "" || password == "" || (password == "" && name == "")) {
                alert('用户名或密码不能为空！');
                window.location.href="index.php";
            }
        }
    </script>-->
    <meta charset="UTF-8">
    <title>视频点播系统</title>
    <!--<link rel="stylesheet" href="hstyle.css" media="screen" type="text/css" />-->
    <style>
        /*body {TEXT-ALIGN: center;}*/
        /*.p1{*/

        /*}*/
        /*.p2{*/

        /*}*/
        video {
            background-color: black;
            border: medium double lightgray;

        }

        #menu {
            width: 800px;
            margin: 0 auto; /*设置块居中*/
            background: #cccccc; /*设置背景颜色*/
            text-align: left;
        }

        #menu ul {
            float: left;
            margin: 0;
            padding: 0;
            list-style: none; /*消除列表原有类型*/
        }

        #menu ul li {
            float: left;
            width: 99px;
            display: block;
            line-height: 30px;
            text-align: center;
        }

        #menu .menudiv {
            float: left;
            width: 1px;
            height: 20px;
            background: #888888;
            margin-top: 5px;
        }

        .head {
            width: 1000px;
            height: 100px;
            MARGIN-RIGHT: auto;
            MARGIN-LEFT: auto;
            background-color: purple;
        }

        .middle {
            width: 1000px;
            height: 800px;
            MARGIN-RIGHT: auto;
            MARGIN-LEFT: auto;
        }

        .video {
            width: 800px;
            height: 800px;
            float: left;
        }

        .login {
            width: 200px;
            height: 200px;
            float: right;
            background-color: pink;
        }

        .list {
            width: 200px;
            height: 600px;
            float: right;
            background-color: #3c763d;
        }

        .foot {
            MARGIN-RIGHT: auto;
            MARGIN-LEFT: auto;
            width: 1000px;
        }

        /*form {*/
        /*text-align: center;*/
        /*}*/
    </style>
</head>
<body>
<div class="head">
    <p>
        <span>视</span><span>屏</span><span>点</span><span>播</span><span>系</span><span>统</span>
    </p>

</div>
<div id="menu">
    <ul>
        <li><a href="http://www.app-echo.com/" target="_blank">echo</a></li>
        <li class="menudiv"></li>
        <li><a href="http://www.dytt.com/" target="_blank">电影淘淘</a></li>
        <li class="menudiv"></li>
        <li><a href="https://www.youtube.com/?hl=zh-cn" target="_blank">YouTube</a></li>
        <li class="menudiv"></li>
        <li><a href="http://www.6vhao.com/dy/" target="_blank">6V电影网</a></li>
        <li class="menudiv"></li>
        <li><a href="http://www.dytt8.net/" target="_blank">电影天堂</a></li>
        <li class="menudiv"></li>
        <li><a href="#">菜单6</a></li>
        <li class="menudiv"></li>
        <li><a href="#">菜单7</a></li>
        <li class="menudiv"></li>
        <li><a href="#">菜单8</a></li>
        <li class="menudiv"></li>
    </ul>

</div>

<div class="middle">
    <div class="video">
        <video src="歌舞青春.mp4" accesskey="v" preload="metadata" width="100%" height="100%" controls>
            Video can not be displayed!
        </video>
    </div>
    <div class="login">
       <form name="login" method="post" target="_blank" action="dealLogn_in.php">
            <label for="myName">账号：</label>
            <input type="text" name="myName" id="myName"><br>
            <label for="pass">密码：</label>
            <input type="password" name="password" id="pass"><br>
            <input type="submit" value="登陆" name="submit" onclick="Check()">
            <input type="reset" value="重置" name="reset">
            <input type="button" value="注册" name="login" onclick="location='sign_up.php'">
        </form>
    </div>
    <div class="list">
        <p class="p1">
            Here is the movie list.
        </p>
    </div>
</div>


<div class="foot">
    <p class="p2">如果您对我们的网站建设有任何意见，请写在下面的文本框中发送给我们，或者直接发送邮件联系我们</p>
    <form method="post" action="opinion.php">
        <p>标题： <label><input name="title" type="text"></label></p>

        <textarea placeholder="请在此输入您的意见：" rows="5" cols="125" style="background-color: palegreen"
                  name="content"></textarea>
        <input type="submit" value="提交" name="submit">
        <input type="reset" value="重置" name="reset">
    </form>
    <div>
        如果您有兴趣填写我们改进网站的调研问卷，请<a href="http://localhost:63342/wzmc/question.html" title="点击打开问卷"
                                target="_blank">点击这里</a>
    </div>
    <address>
        网站运维：KiiMiiLii
        个人主页：<a href="http://weibo.com/tonyleung0627?c=spr_qdhz_bd_baidusmt_weibo_s&nick=姊佹湞鍋?" target="_blank"
                title="点击进入他的主页"> Home Of KiiMiiLii</a>
        工作邮箱：<a href="mailto:b.j.l.s@icloud.com?subject=关于建设网站名册的一些意见">b.j.l.s@icloud.com</a>
    </address>
</div>

</body>
</html>
