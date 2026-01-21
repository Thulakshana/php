<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="username">
    <button type="submit">submit</button>
    </form>
    <?php
    $name="thulakshana";
    $age=22;
    echo $name;
    echo $age;

    $name1=$_GET['username'];
    echo"your name is".$name1;

    


    ?>
</body>
</html>