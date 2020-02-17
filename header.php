<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  <?php
    if (empty($title)){
        echo"Min Sida! Title not loaded";
    } else {
        echo $title;
    }
    ?></title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/main.js"></script>
</head> 
<body>



<h1>Welcome to my </h1>

<a href="index.php">start</a> | <a href="about.php">om oss</a> | <a href="login.php">Logga in</a>

</body>
</html>

    
