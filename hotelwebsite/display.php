<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $db = mysqli_connect("localhost", "root", "", "photos");
    $result = $db->query("SELECT * FROM image") or die($db->error);

    while ($data = $result->fetch_assoc()){
        // echo"<h2>{$data['name']}</h2>";
        echo "<img src='{$data['filename']}' width='40%' height='40%'>";
    }
    ?>
</body>
</html>