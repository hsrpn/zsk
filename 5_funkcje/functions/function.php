<?php
function show() {
  echo "test";
}
function show_1() {
  return;
}
function show_name($name) {
  return $name;
}

// zdefiniuj funkcję o nazwie stringValidate, która
// wykona następujące działania:
//  usunie białe znaki
// zamieni pierwszą literę na dużą
// od drugiej litery małe litery
// drugi parametr będzie określał długość stringa
//

function stringValidate($name, $number) {
$name = substr(ucfirst(mb_strtolower(trim($name))), 0, $number);
return $name;
}
?>
