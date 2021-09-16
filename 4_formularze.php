<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <!-- formularz -->
    <form method="post">
      <!-- formularz musi posiadać input -->
      <!-- zamiast id używa się name -->
      <input type="text" name="name" value="Janusz">
      <input type="text" name="surname" placeholder="Podaj nazwisko">
      <input type="submit" value="zatwierdź">
      <!-- wartość zostaje przypisana po submit -->
      <?php
      if (isset($_POST['name'])) {
      //  echo "<br> Imię i nazwisko: ".$_POST['name']." ".$_POST['surname']; // zawartość zmiennej
      echo <<< L
      <hr>
      Imię: $_POST[name]<br>
      Nazwisko: {$_POST['surname']}
      L;
      }

       ?>
  </body>
</html>
