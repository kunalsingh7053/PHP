<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    username<br>
    <input type="text" name="user" ><br><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_GET['user']))
{
    $name = $_GET['user'];
    
    echo "<h1 style='color:red'>hello  $name</h1>";

}
if(isset($_POST['user']))
{
    $name = $_GET['user'];
    
    echo "<h1 style='color:red'>hello  $name</h1>";

}
if(isset($_REQUEST['user']))
{
    $name = $_GET['user'];
    
    echo "<h1 style='color:red'>hello  $name</h1>";

}

?>
</body>
</html>