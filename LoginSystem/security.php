<?php

const AES_256_KEYLEN = 32;
const AES_256_IV_LEN = 16;
const XOR_MASTER_KEY = "vQa5JIjBlagq2e39wtHo7gQQ1HOEjJEQ";
const AES_256_MODE   = "AES-256-CBC";


// can be used to both decrypt and encrypt data
// using basic xor encryption and decryption.
function xorCrypt($plainData) {
    $cipherbuf = ""; //This will contain the ciphered text.
    // Now we go through the plain data and xor each letter one by one.

    for ($i = 0; $i < strlen($plainData); $i++) {
        $cipherbuf .= 
        $plainData[$i] ^ XOR_MASTER_KEY[$i % strlen(XOR_MASTER_KEY)];
    }
    return $cipherbuf; // Return the cipher text
}

function AES256_Encrypt_CBC($plaintext) {
    $AES_KEY = random_bytes(32); //Generate Key
    $AES_IV  = random_bytes(16); //Generate IV

    // Encrypt the data, and store the ciphered text in Cipher_buf
    $cipherData = openssl_encrypt(
        $plaintext, // plain raw data to be encrypted
        "AES-256-CBC", //method (Cipher-Block-Chaining)
        $AES_KEY, // key used in the encryption
        OPENSSL_RAW_DATA, //return cipher as raw data, instead of base64 encoded
        $AES_IV // the IV (recomended to always be different/random)
    );
    // Return new String looking like(xorred iv + xorred key + ciphertext)
    return xorCrypt($AES_IV).xorCrypt($AES_KEY).$cipherData; //encrypted plain text
}
// The IV is the first 16 characters
// The following 32 characters are the key
// The rest is the encrypted message.
function AES256_Decrypt_CBC($ciphertext) {
    $plainIV  = xorCrypt(substr($ciphertext, 0, 16));    // The IV is the first 16 characters
    $plainKEY = xorCrypt(substr($ciphertext, 16, 48));    // The following 32 characters are the key
    $cipherText_len = strlen($ciphertext) - 48;//The length of only the ciphered text, excluding key length and iv

    $plainText = openssl_decrypt(
         substr($ciphertext, 48, $cipherText_len),
         "AES-256-CBC",
         $plainKEY,
         OPENSSL_RAW_DATA, 
         $plainIV
    );

    return $plainText;
}?>