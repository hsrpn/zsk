<?php
  echo PHP_VERSION;
  echo 2**10; //1024

  $x=1;
  $y=10;
  echo $x<=>$y;

  $x=1;
  $y=1.0;
  echo gettype($x);
  echo gettype($y);

  if ($x==$y) {
    echo "Równe";

  } else {
    echo "Różne";
  }

  //identyczne
  if ($x===$y) {
    echo "identyczne";

  } else {
    echo "Różne";
  }
  /* preinkrementacja ++$
    postinkrementacja $++
    predekrementacja --$
    postdekrementacja $--
    */

$x=10;
echo "<br>";
echo $x; //10
echo "<br>";
$x=$x++;
echo $x; //11
echo "<br>";
$y=$x++;
echo $x; //10
echo "<br>";
echo $y;

$x=1;
echo $x;
$x=$x++;
echo $x;
$x=++$x;
echo $x;
$y=++$x;
echo $x;
echo $y;
$y=$x++;
echo $x;
echo $y;

  ?>
