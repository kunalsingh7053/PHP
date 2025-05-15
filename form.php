<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <form action="" method="post">
        <input type="checkbox" name="hobby[]" value="cricket"> Cricket<br>
        <input type="checkbox" name="hobby[]" value="vollyboll"> Vollyboll<br>
        <input type="checkbox" name="hobby[]" value="football"> Football<br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    echo"<h1>hobbys</h1>";
$arr = $_POST['hobby'];
foreach($arr as $key )
{
    echo $key."<br>";
}

?>
</body>
</html>