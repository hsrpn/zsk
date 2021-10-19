<?php
require_once('../functions/function.php');
show();
echo show_1();
if (!empty($_POST['name'])) {
  echo "<hr>Imię: ".show_name($_POST['name']."<br>");

}
echo "(essa): ".stringValidate("zygmunt", 3);
?>
