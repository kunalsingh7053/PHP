<?php
// ✅ 1. Storing Data in Arrays
$fruits = array("Apple", "Banana", "Mango");

// ✅ 2. Processing Arrays with Loops and Iterations
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// ✅ 3. Using Arrays with Forms
$selectedHobbies = [];
if (isset($_POST['submit'])) {
    if (!empty($_POST['hobby'])) {
        $selectedHobbies = $_POST['hobby'];
    } else {
        echo "No hobby selected.<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays in PHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            height: 100%;
            width: 100%;
        }
        body {
            background-color: black;
            color: white;
            padding: 20px;
        }
        h1 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Hobby Form</h1>

    <form action="Arrays.php" method="post">
        <input type="checkbox" name="hobby[]" value="cricket"> Cricket<br>
        <input type="checkbox" name="hobby[]" value="vollyboll"> Vollyboll<br>
        <input type="checkbox" name="hobby[]" value="football"> Football<br><br>
        <input type="submit" name="submit" value="Submit">
    </form>


</body>
</html>
