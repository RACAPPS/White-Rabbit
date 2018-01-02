<?php
//It may take up to 8 minutes to find the first coincidence
$cicle = 0;
$total = 17*16*15*14*13*12*11*10*9;
$range = range(0, 16);
$prev = -1;
foreach ($range as $n1) {
  foreach (array_diff($range, [$n1]) as $n2) {
    foreach (array_diff($range, [$n1, $n2]) as $n3) {
      foreach (array_diff($range, [$n1, $n2, $n3]) as $n4) {
        foreach (array_diff($range, [$n1, $n2, $n3, $n4]) as $n5) {
          foreach (array_diff($range, [$n1, $n2, $n3, $n4, $n5]) as $n6) {
            foreach (array_diff($range, [$n1, $n2, $n3, $n4, $n5, $n6]) as $n7) {
              foreach (array_diff($range, [$n1, $n2, $n3, $n4, $n5, $n6, $n7]) as $n8) {
                foreach (array_diff($range, [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8]) as $n9) {
                  $cicle ++;
                  $current = intval(($cicle/$total)*100);
                  if($current != $prev){
                    echo("Progress: ".$current."% Time: ".time()."\n");
                    $prev = $current;
                  }
                  $is = true;
                  //Variables of the ecuations
                  $x7 = $n1;
                  $x8 = $n2;
                  $x10 = $n3;
                  $x11 = $n4;
                  $x12 = $n5;
                  $x13 = $n6;
                  $x14 = $n7;
                  $x15 = $n8;
                  $x16 = $n9;

                  //Ecuations system obtained by solving the matrix of the system of the challenge, on line 61
                  $x1 = $x7 + $x10 - $x16;
                  $x2 = $x8 - $x10 + $x11 + $x12 - $x13 - $x14 + $x16;
                  $x3 = - $x7 - $x11 + $x13 + $x14 + $x16;
                  $x4 = - $x8 - $x12 + $x13 + $x14 + $x15;
                  $x5 = - $x7 + $x11 + $x12 - $x13 + $x16;
                  $x6 = - $x8 - $x11 - $x12 + 2 * $x13 + $x14 + $x15;
                  $x9 = - $x10 - $x11 - $x12 + $x13 + $x14 + $x15 + $x16;

                  //Check any of the resulting variables are out of range
                  for($i = 1; $i < 17; $i++){
                    if(${"x"."$i"} < 0 || ${"x"."$i"} > 16){
                      $is = false;
                    }
                    //Check any of the resulting variables are duplicated
                    for($i2 = $i + 1; $i2 < 17; $i2++){
                      if(${"x"."$i"} == ${"x"."$i2"}){
                        $is = false;
                      }
                    }
                  }

                  //Show if a valid result has been found. You have to change the two digit numbers in order from 10, to 16,  to a,b,c,d,e,f and g, respectively.
                  if($is){
                    echo("Possibility: ");
                    for($i = 1; $i < 17; $i++){
                      echo(${"x"."$i"}.", ");
                    }
                    //Remove this line if you want to find all the posible keys
                    die();
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

?>
