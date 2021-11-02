<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <style>
      table, th, td {border: 1px solid black;}
    </style>

  <body>
    <h4>Użytkownicy</h4>
    <?php
    $connect = new mysqli("localhost","root", "", "zsk_4cg2_baza1");
    //server, user, password, database name
    //przechowywany jest id polaczenia
    $sql = "SELECT * FROM `users`;";

    $result = $connect->query($sql);
    //$row = $result-> fetch_assoc();
    // print_r($row);
    while ($row = $result-> fetch_assoc()) {
      //dopoki posiada rekordy
      echo <<< ROW
      Id: $row[id]<br>
      Imię i nazwisko: $row[name] $row[surname]<br>
      Data urodzenia: $row[birthday]<hr>
      ROW;
    }
    $connect->close();
     ?>
  </body>
</html>
