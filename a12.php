<?php
$string = "Hello";
$reversed = "";
for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reversed .= $string[$i];
}
echo "Input: \"$string\"\n";
echo "Output: \"$reversed\"\n";