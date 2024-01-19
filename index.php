<?php include('db.class.php');?>
<?php include('test.class.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $testObj = new Test();
    $testObj -> getUsers();
    $testObj -> getOneUser("papa","keza");
    $testObj -> setUser("Elvis","mugisha",22);


    ?>
    
</body>
</html>