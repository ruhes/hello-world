<?php
    function __autoload ($classname){
        include $classname.'.class.php';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>#login,#reg,#start{margin:0 auto;text-align: center;}</style>
</head>
<body>
    <?php
        $main = new Main($_GET['index']);
        $main->_run();
    ?>
</body>
</html>