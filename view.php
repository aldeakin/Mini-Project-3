<?php
  include_once "login.php";
  
  $querystring = "INSERT INTO "
                  . "product_order "
                  . "(date, product_choice, location, notes)"
                  . " VALUES "
                  ."("
                  . "\"" . $_POST['date'] . "\","
                  . $_POST['pain'] . ","
                  . "\"" . $_POST['location'] . "\","
                  . "\"" . $_POST['notes'] . "\""
                  . ")";

  if(mysqli_query($link, $querystring) === TRUE){
    echo "Record successfully added to database";
  } else {
    echo "Error: " . $querystring;
  }
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
  <h1>View Page</h1>
  <?php
    //if this is a delete, then do it before you show the list
    if(isset($_POST['delete'])){
    $querydelete = "DELETE from product_order where id=" . $_POST['delete'];
    mysqli_query($link, $querydelete);
    }

    $querystring2 = "SELECT * FROM product_order";

    $dataset = mysqli_query($link, $querystring2);
    $rows = mysqli_num_rows($dataset);
    echo "There are " . $rows . " rows in the product_order table";

    for($i = 0; $i <$rows; $i++){
      $row_data = mysqli_fetch_array($dataset, MYSQLI_ASSOC);
      echo "<div class='row'>"
      . $row_data['location']
      . " -- pain: " . $row_data['product_choice']
      . "<form action = '' method = 'post'>"
      . "<button type = 'submit' name='delete' value="
      .$row_data['id'] . ">"
      ."Delete</button>"

      ."</form>"
      . "</div>";

    }
  ?>
</body>
</html>