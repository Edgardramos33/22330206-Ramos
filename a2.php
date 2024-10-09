<?php
$correct_password = "password123";
do {
    echo "Please enter the password: ";
    $input_password = trim(fgets(STDIN));
    if ($input_password !== $correct_password) {
        echo "Incorrect password.\n";
    }
} while ($input_password !== $correct_password);

echo "Access Granted.";
?>
