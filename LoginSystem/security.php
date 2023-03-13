<?php

/*
IV (Explaination):
An initialization vector (IV) is added to the encryption process. 
The IV is a sequence of random numbers and symbols. that is added to the message before it is encrypted. 
This means that even if you encrypt the same message with the same key multiple times, 
the resulting scrambled messages will be different each time.
This makes it harder for someone to figure out the key and unscramble the message.
*/
// Updated (New Method) 
function AESEncryptV2($plain) {
   // This line generates a random key using the OpenSSL library function openssl_random_pseudo_bytes(). The key is 32 bytes (256 bits) long. 
    $key    = openssl_random_pseudo_bytes(32);
    //This line generates a random initialization vector (IV) using the OpenSSL library function openssl_random_pseudo_bytes(). 
    //The length of the IV is determined by the AES-256-CBC cipher, which is the cipher mode being used in this implementation.
    $iv     = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
    //This line encrypts the plaintext using the AES-256-CBC cipher with the generated key and IV. The result is stored in the $cipher variable.
    $cipher = openssl_encrypt($plain, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
    return $key.$iv.$cipher;
}
function AESDecryptV2($ciphertext) {
    //This line extracts the first 32 bytes of the $ciphertext string, which correspond to the key used for encryption.
    $key = substr($ciphertext, 0, 32);
    //This line extracts the next portion of the $ciphertext string, which corresponds to the initialization vector used 
    //for encryption. The length of the IV is determined by the AES-256-CBC cipher, which is the cipher
    $initVector = substr($ciphertext, 32, openssl_cipher_iv_length('AES-256-CBC'));
    //This line extracts the remaining portion of the $ciphertext string, which corresponds to the encrypted message.
    $cipher = substr($ciphertext, 32 + openssl_cipher_iv_length('AES-256-CBC'));
    return openssl_decrypt($cipher, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
}

function AES256_Encrypt_CBC($plain) {
    $key = "0000000000000000";
    $iv  = "123456789abcdefg";
    return openssl_encrypt($plain, "AES-256-CBC", $key, 0, $iv);
}

function AES256_Decrypt_CBC($ciphertext) {
    $key = "0000000000000000";
    $iv  = "123456789abcdefg";
    return openssl_decrypt($ciphertext, "AES-256-CBC", $key, 0, $iv);
}
?>
