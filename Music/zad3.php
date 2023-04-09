<?php 
  // povezivanje na bazu 'eu'
  $server = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'eu';
  $conn = new mysqli($server, $user, $password, $database);

  if($conn->connect_error) { 
    echo $conn->connect_error;
    die();
  }

  if(isset($_POST['unesi'])) {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $fakultet = $_POST['fakultet'];
    $smer = $_POST['smer'];
    $br = $_POST['br'];

    $conn->query(
      "INSERT INTO student(ime, prezime, fakultet, smer, br_indeksa)
       VALUES ('$ime', '$prezime', '$fakultet', '$smer', '$br');
      ");

      echo "Uspesno upisivanje studenta u bazu!";
  }
?>

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
    Ime: <input type="text" name="ime" required /> <br>
    Prezime: <input type="text" name="prezime" required /> <br>
    Fakultet: <input type="text" name="fakultet" required /> <br>
    Smer: <input type="text" name="smer" required /> <br>
    Broj indeksa: <input type="text" name="br" required /> <br>
    <input type="submit" value="Unesi!" name="unesi">
  </form>
  
</body>
</html>