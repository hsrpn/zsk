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
    echo "<table>";
    echo <<< TABLE
      <tr>
          <th>Id</th>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
          <th></th>
      </tr>
    TABLE;
    while($rows = $result->fetch_assoc()){
      echo <<<ROW
      <tr>
          <td>
              $rows[id]
          </td>
          <td>
              $rows[name]
          </td>
          <td>
              $rows[surname]
          </td>
          <td>
              $rows[birthday]
          </td>
          <td>
            <a href="../skrypty/delete.php?id=$rows[id]">Usuń</a>
          </td>
      </tr>

      ROW;
    }
    echo "</table>";
     ?>
  </body>
</html>
