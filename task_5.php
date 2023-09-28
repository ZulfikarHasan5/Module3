<?php
function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    $charLength = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charLength);
        $password .= $characters[$randomIndex];
    }

    return $password;
}

// Generate a password with a length of 12 characters
$generatedPassword = generatePassword(12);

// Print the generated password
echo $generatedPassword;
?>
