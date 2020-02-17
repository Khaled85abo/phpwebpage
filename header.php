<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
    if (empty($title)){
        echo"Min Sida! Title not loaded";
    } else {
        echo $title;
    }
    ?>
    
    </title>
</head>
<body>
    <h1>PHP-webpage!</h1>
    <a href="index.php">start</a> | <a href="about.php">om oss</a>

</body>
</html>