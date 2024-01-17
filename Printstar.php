<?php
 function Triangle($height) {
    for ($i = 1; $i <= $height; $i++) {
        
        for ($j = 1; $j <= $height - $i; $j++) {
            echo " ";
        }

       
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        
        echo "\n";
    }
}


echo "Enter the height";
$height = intval(readline());
if ($height > 0) {
    Triangle($height);
} else {
    echo "Enter Correct Number\n";
}

?>