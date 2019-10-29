<?php
require_once 'cls_encryption.php';

//our data to be encoded
$password_plain = 'Hassan';
echo '<strong>Name :</strong>' . $password_plain . "<br>";

//our data being encrypted. This encrypted data will probably be going into a database
//since it's base64 encoded, it can go straight into a varchar or text database field without corruption worry
$password_encrypted = my_encrypt($password_plain, $key);
echo '<strong>Encrypted :</strong>' . $password_encrypted . "<br>";

//now we turn our encrypted data back to plain text
$password_decrypted = my_decrypt($password_encrypted, $key);
echo '<strong>Decrypted :</strong>' . $password_decrypted . "<br>";
?>