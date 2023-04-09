<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="./zad2_get.php" method="get">
    Ime: <input type="text" name="ime"> <br>
    Prezime: <input type="text" name="prezime"> <br>
    Pol: <input type="radio" name="pol" value="M"> M <input type="radio" name="pol" value="Z"> Z <br>
    Drzavljanstvo: 
    <select name="drzavljanstvo"> 
      <option value="R. Srbije">RS</option>
      <option value="R. Hrvatske">HR</option>
      <option value="R. Crne Gore">CG</option>
    </select> <br>
    <input type="submit" value="Submit" name="unesi">
  </form>
</body>
</html>