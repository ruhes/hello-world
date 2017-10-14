<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div id="reg">
        <h3>注册请输入个人信息</h3>
        <form method="post" action="index.php?index=reg">
            <p>用 户 名：<input type="text" name="username"></p>
            <p>密　　码：<input type="password" name="password"></p>
            <p>确认密码：<input type="password" name="notPassword"></p>
            <p>电子邮件：<input type="text" name="email"></p>
            <p><input type="submit" value="注册" name="submit"></p>
            <a href="index.php">[返回上一层]</a>
        </form>
    </div>
</body>
</html>