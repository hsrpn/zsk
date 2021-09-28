<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
if (!empty($_POST['geometricFigure']) && !empty($_POST['name'])) {
  switch (($_POST['geometricFigure'])) {
    case 'kwadrat':
      echo 'kwadrat';
      break;
    case 'prostokat':
      echo 'prostokat';
      break;

  }
  echo 'ok';
} else {
    <script>
    history.back();
    </script>
  }


?>
