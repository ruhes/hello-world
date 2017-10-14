<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div id="login">
        <h3>请输入你的用户名和密码</h3>
        <form method="post" action="index.php?index=login">
            <p>用 户 名：<input type="text" name="username"></p>
            <p>密　　码：<input type="password" name="password"></p>
            <p><input type="submit" value="登陆" name="submit"></p>
            <a href="index.php">[返回上一层]</a>
        </form>
    </div>
</body>
</html>