<?php
function generatePassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    $chars_length = strlen($chars) - 1;
    
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[mt_rand(0, $chars_length)];
    }
    
    return $password;
}

$password = generatePassword(12);

// Print the generated password
echo "Generated Password: $password";
?>
