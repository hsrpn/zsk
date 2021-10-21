
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "dzien-miesiac-rok".date('d-m-Y').'<br>'; //21-10-2021
    echo date('m-d-y').'<br>';
    echo date('d-M-y').'<br>'; // 21 Oct 2021
    echo date('d-F-y').'<br>'; // 21 October 2021

    setlocale(LC_ALL, 'polish');
    echo strftime('%d %B %Y').'<br>';
    echo date('G:i:s').'<br>'; //7:25:30
    echo date('G:i:sa').'<br>'; //7:25:45 am
    echo date('H:i:s').'<br>'; // 07:25:30

    $data = getdate();
    //echo $data;  warning
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    echo $data['wday'].'<br>';
    echo $data['yday'].'<br>';
    echo date('L'); //0-rok nie jest przestępny
    $today = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    echo $today.'<br>';
    //lata od 1 stycznia 1970
    $year=$today/(60*60*24*365);
    echo (int)$year. ' lat <br>';

    $today = mktime(0, 0, 0, date('m'), date('d'), date('Y')-1);
    echo $today.'<br>';
    //lata od 1 stycznia 1970
    $year=$today/(60*60*24*365);
    echo (int)$year. ' lat <br>'; //50 lat


    ?>
    <script>
      // setTimeout(function() {
      //
      //   window.location.reload();
      // }, 1000)
    </script>

  </body>
</html>
