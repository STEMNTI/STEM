<?php

const AES_256_KEYLEN = 32;
const AES_256_IV_LEN = 16;
const XOR_MASTER_KEY = "vQa5JIjBlagq2e39wtHo7gQQ1HOEjJEQ";
const AES_256_MODE   = "AES-256-CBC";

// Generate Random IV, which is used in the OpenSSL aes 256 algorithm.
function CryptGenIV() {
    $characters = "0123456789";
    $result = "";
    for ($i = 0; $i < AES_256_IV_LEN; $i++) {
        $result .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $result;
}

// Generate a random sequence of characters to be used as
// the key in the OpenSSL aes 256 algorithm.
function CryptGenAESkey() {
    $characters =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZ".
        "abcdefghijklmnopqrstuvwxyz".
        "0123456789".
        "#!?=}{%";

    $result = "";
    for ($i = 0; $i < AES_256_KEYLEN; $i++) {
        $result.= $characters[rand(0, strlen($characters) - 1)];
    }
    return $result;
}

// can be used to both decrypt and encrypt data
// using basic xor encryption and decryption.
function DarkartXorCrypt($plainData) {
    $cipherbuf = ""; //This will contain the ciphered text.
    // Now we go through the plain data and xor each letter one by one.

    for ($i = 0; $i < strlen($plainData); $i++) {
        $cipherbuf .= 
        $plainData[$i] ^ XOR_MASTER_KEY[$i % strlen(XOR_MASTER_KEY)];
    }
    return $cipherbuf; // Return the cipher text
}

function AES256_Encrypt_CBC($plaintext) {
    $AES_KEY = CryptGenAESkey(); //Generate Key
    $AES_IV  = CryptGenIV(); //Generate IV

    // Encrypt the data, and store the ciphered text in Cipher_buf
    $cipherData = openssl_encrypt(
        $plaintext, // plain raw data to be encrypted
        AES_256_MODE, //method (Cipher-Block-Chaining)
        $AES_KEY, // key used in the encryption
        OPENSSL_RAW_DATA, //return cipher as raw data, instead of base64 encoded
        $AES_IV // the IV (recomended to always be different/random)
    );
    // Return new String looking like(xorred iv + xorred key + ciphertext)
    return DarkartXorCrypt($AES_IV).DarkartXorCrypt($AES_KEY).$cipherData; //encrypted plain text
}
// The IV is the first 16 characters
// The following 32 characters are the key
// The rest is the encrypted message.
function AES256_Decrypt_CBC($ciphertext) {
    $plainIV  = DarkartXorCrypt(substr($ciphertext, 0, 16));    // The IV is the first 16 characters
    $plainKEY = DarkartXorCrypt(substr($ciphertext, 16, 48));    // The following 32 characters are the key
    $cipherText_len = strlen($ciphertext) - 48;//The length of only the ciphered text, excluding key length and iv

    $plainText = openssl_decrypt(
         substr($ciphertext, 48, $cipherText_len),
         AES_256_MODE,
         $plainKEY,
         OPENSSL_RAW_DATA, 
         $plainIV
    );

    return $plainText;
}

function lazylog($msg, $tag) {
    echo "<$tag>$msg</$tag><br>";
}

/* QUICK EXAMPLE, OF HOW TO USE THIS */
$msg = "Hello NTI, This is a quick example of Rami's Dark Art encryption function; be advised.";
$enc = AES256_Encrypt_CBC($msg);
$dec = AES256_Decrypt_CBC($enc);

lazylog("Message To Encrypt:<br><span>$msg</span><br>", "p");
lazylog("Encrypted :<br><span>$enc</span>", "p");
lazylog("Decrypted :<br><span>$dec</span>", "p");
?>
