<?php 

    $output = "";
    $passwordLength = $_GET["length"];
    echo $passwordLength;

    for ($i = 0; $i <= $passwordLength; $i++) {
        $rng = rand(1,4);
        if($rng == 1){
            $output .= rand(0,9);
        } else if($rng == 2){
            $output .= chr(rand(65,90));
        } else if($rng == 3){
            $output .= $letter = chr(rand(97,122));
        } else if($rng == 4){
            $output .= chr(rand(33,38));;
        }
      };

      echo "<hr>";
      echo $output;