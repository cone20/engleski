<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post">
    Prvi broj <input type="number" name="a" /> <br>
    Drugi broj <input type="number" name="b" /> <br>
    <input type="radio" name="operacija" value="+">Sabiranje <br>
    <input type="radio" name="operacija" value="-">Oduzimanje <br>
    <input type="submit" name="izracunaj" value="Izracunaj!">
  </form>

  <?php
  $result = 0;
  if (isset($_POST['izracunaj'])) {
    if ($_POST['operacija'] == '+') {
      $result = $_POST['a'] + $_POST['b'];
    } else {
      $result = $_POST['a'] - $_POST['b'];
    }

    echo $_POST['a'].' '.$_POST['operacija'].' '.$_POST['b'].' = '.$result;
  }
  ?>
</body>

</html>