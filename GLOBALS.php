<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//super global variable 
$x=10;
function myfunc(){
    echo $GLOBALS['x'];
    // x wala value eka function ekata pition ganna globals use karanwa
}

    ?>
</body>
</html>