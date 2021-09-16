<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <!-- formularz -->
    <!-- <form method="GET"> -->
    <form method="get">
      <!-- formularz musi posiadać input -->
      <!-- zamiast id używa się name -->
      <input type="text" name=" name"placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <input type="submit" value="zatwierdź">
      <!-- wartość zostaje przypisana po submit -->
      <?php
      if (!empty($_GET['name']) && !empty($_GET['surname'])) {
      //  echo "<br> Imię i nazwisko: ".$_GET['name']." ".$_GET['surname']; // zawartość zmiennej
      echo <<< L
      <hr>
      Imię: $_GET[name]<br>
      Nazwisko: {$_GET['surname']}
      L;
    } else {
      echo "Wypełnij dane";
    }

       ?>
  </body>
</html>
