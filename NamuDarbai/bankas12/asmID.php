<?php
require __DIR__ . '/msg.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ak = $_POST['asmensKodas'];
    //   echo $_POST['asmensKodas'].'<br>';
      if(strlen($ak)!=11){
        //   echo "ilgis geras<br>";
          setMessage('Per mazai. ');
      }
      else if(preg_match("/^[0-9]+$/", $ak)){
          echo "vien skaiciai<br>";
      }
      else if(substr($ak, 0,1) > 0 && substr($ak, 0,1) < 7 ){
          echo "skaicius tarp 0 ir 7";
      }
      if(substr($ak, 1,3) <7 ){
          echo "skaicius tarp 0 ir 7";
      }
    //   checkdate ( $month, $day, $year );
    //   die;
  }