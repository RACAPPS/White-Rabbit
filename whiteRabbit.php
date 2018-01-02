<?php
/**
*
*Cripto 2
*
*@author Ozyart
*@uses Cripto Enigma by Ozyart
*@version 2.1.0
*
*/
  $x7 = 0;
  $x8 = 1;
  $x10 = 7;
  $x11 = 8;
  $x12 = 11;
  $x13 = 9;
  $x14 = 6;
  $x15 = 10;
  $x16 = 5;

  $x1 = $x7 + $x10 - $x16;
  $x2 = $x8 - $x10 + $x11 + $x12 - $x13 - $x14 + $x16;
  $x3 = - $x7 - $x11 + $x13 + $x14 + $x16;
  $x4 = - $x8 - $x12 + $x13 + $x14 + $x15;
  $x5 = - $x7 + $x11 + $x12 - $x13 + $x16;
  $x6 = - $x8 - $x11 - $x12 + 2 * $x13 + $x14 + $x15;
  $x9 = - $x10 - $x11 - $x12 + $x13 + $x14 + $x15 + $x16;

  for($i = 1; $i < 17; $i++){
    echo(${"x"."$i"}.",");
  }
  echo("\n");

  $_GET["key"] = "23cdfe01478b96a5";

  function D($M){

      $L = array();

      foreach ($M as $X) {
          if (! in_array($X, $L) ) {
              array_push($L,$X);
          }
      }

      if (sizeof($M) == sizeof($L)) {
           return True;
      }else{
           return False;
      }

  }

  if (!isset($_GET["key"])) {
      die("knock knock");
  }

  $your_key = $_GET["key"];


  if (strlen($your_key) != 16 ){
    die("The serial have 16 digits");
  }

  $M = array();

  $A = str_split($your_key);

  foreach ($A as $S) {

    switch ($S) {
      case 'a': array_push($M,10); break;
      case 'b': array_push($M,11); break;
      case 'c': array_push($M,12); break;
      case 'd': array_push($M,13); break;
      case 'e': array_push($M,14); break;
      case 'f': array_push($M,15); break;
      case 'g': array_push($M,16); break;
       default: array_push($M,$S); break;
    }
  }

  if ( D($M) == True) {
      if    ( $M[0]+$M[1]+$M[2]+$M[3] == $M[4]+$M[5]+$M[6]+$M[7]
          and $M[0]+$M[1]+$M[2]+$M[3] == $M[8]+$M[9]+$M[10]+$M[11]
          and $M[0]+$M[1]+$M[2]+$M[3] == $M[12]+$M[13]+$M[14]+$M[15]
          and $M[4]+$M[5]+$M[6]+$M[7] == $M[8]+$M[9]+$M[10]+$M[11]
          and $M[4]+$M[5]+$M[6]+$M[7] == $M[12]+$M[13]+$M[14]+$M[15]
        and $M[8]+$M[9]+$M[10]+$M[11] == $M[12]+$M[13]+$M[14]+$M[15]
         and $M[0]+$M[4]+$M[8]+$M[12] == $M[1]+$M[5]+$M[9]+$M[13]
         and $M[0]+$M[4]+$M[8]+$M[12] == $M[2]+$M[6]+$M[10]+$M[14]
         and $M[0]+$M[4]+$M[8]+$M[12] == $M[3]+$M[7]+$M[11]+$M[15]
         and $M[1]+$M[5]+$M[9]+$M[13] == $M[2]+$M[6]+$M[10]+$M[14]
         and $M[1]+$M[5]+$M[9]+$M[13] == $M[3]+$M[7]+$M[11]+$M[15]
        and $M[2]+$M[6]+$M[10]+$M[14] == $M[3]+$M[7]+$M[11]+$M[15]
        and $M[0]+$M[5]+$M[10]+$M[15] == $M[12]+$M[9]+$M[6]+$M[3] ){
          print "Correct serial number!";
      }else{
          print "Incorrect serial number!";
      }
  }else{
      print("Go hard or go home!");
  }
?>
