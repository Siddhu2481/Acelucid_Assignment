<?php
function ValidDate($input) {
    
    $pattern = "/\b(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01])(19|20)\d{2}\b/";
    preg_match_all($pattern, $input, $matches);
    if (!empty($matches[0])) {
        echo "Valid date found\n";
        foreach ($matches[0] as $date) {
            echo $date . "\n";
        }
    } else {
        echo "No valid date found \n";
    }
}
echo "Enter a string  ";
$input = readline();
ValidDate($input);

?>
