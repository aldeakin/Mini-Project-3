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
  <h1>Place Your Order</h1>
  <form action="view.php" method="post">
    <div>
      <label for="date">Date and Time:</label>
      <input type="datetime-local" name="date" id="" required>
    </div>
    <div element class="product">
      <label for="pain">Product: </label>
      <input type="radio" name="pain" id="" value="6">Hoodie
      <input type="radio" name="pain" id="" value="3" checked="checked">T-shirt
      <input type="radio" name="pain" id="" value="7">Sticker

    </div>
    <div>
      <label for="location">Location</label>
      <select name="location" id="" required>
        <option value="home">Home</option>
        <option value="school">School</option>
        <option value="online_games">Online Games</option>
      </select>
    </div>
    <div>
      <label for="notes">Notes:</label>
      <textarea name="notes" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
      <button type="submit">Save</button>
    </div>
  </form>
  
</body>
</html>