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

function AES256_Encrypt_CBC($plain) {
    $key = "0000000000000000";
    $iv  = "123456789abcdefg";
    return openssl_encrypt($plain, "AES-256-CBC", $key, 0, $iv);
}