<?php
include_once "login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="nav">This could be a navbar</div>
    <div id="hero">
        <h1>What a Yeet!</h1>
    </div>

<?php
$querystring = "UPDATE all_yeet SET yeet"=\"" . $_POST["newvalue"] . "\" WHERE yeet=\"" . $_POST["condition"];
mysqli_query($link, $querystring);

$querystring2 = "SELECT * from all_yeet";

$result = mysqli_query($link, $querystring2);
$rows = mysqli_num_rows($result);

for($i=0; $i < $rows; $i++){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo
        "<div class='yeetrow'>"
        . "<span class='field1'>".$row["yeet"]."</span>"
        ."<form action=' ' method='post'><button type='submit' name='delete" . $row["ID"]
        "'value='" . $row["ID"]. "'>"
        ."Delete</button></form>"
        ."</div>";
}

?>
</div>
</body>
</html>