<?php
function _aes_256_gen_iv() {
    $characters = "0123456789";
    $result = "";
    for ($i = 0; $i < 16; $i++) {
         $result .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $result;
  }

  function _aes_256_gen_key() {
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $result = "";
    for ($i = 0; $i < 32; $i++) {
      $result .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $result;
  }
  // Can be used to both decrypt and encrypt data
  function _DarkArt_Xor_Crypt($plainData) {
    $m_private = "vQa5JIjBlagq2e39wtHo7gQQ1HOEjJEQ"; //master key(32)
    $m_len = strlen($m_private); //length of masterkey (32 by default)
    $cipherbuf ="";
    for ($i = 0; $i < strlen($plainData); $i++) {
      $cipherbuf.= $plainData[$i] ^ $m_private[$i % $m_len];
    }
    return $cipherbuf; // return xorred data
  }
  
  function _AES256_Encrypt_CBC($plaintext) {
    $cry_aes_key = _aes_256_gen_key();  //Generate Key
    $cry_aes_iv  = _aes_256_gen_iv(); //Generate IV

    // Encrypt the data, and store the ciphered text in Cipher_buf
    $cipherData = openssl_encrypt(
      $plaintext, // plain raw data to be encrypted
      "AES-256-CBC", //method (Cipher-Block-Chaining)
      $cry_aes_key, // key used in the encryption
      OPENSSL_RAW_DATA, //return cipher as raw data, instead of base64 encoded
      $cry_aes_iv // the IV (recomended to always be different/random)
    );
    // Return new String looking like(xorred iv + xorred key + ciphertext)
    return (
     _DarkArt_Xor_Crypt($cry_aes_iv) . // xorred IV
     _DarkArt_Xor_Crypt($cry_aes_key). //xorred key
     $cipherData //encrypted plain text
    );
  }
  
  function _AES256_Decrypt_CBC($ciphertext) {
    // This variable will only contain the data from
    // begining of $cipherdata to character 48.
    $dexorred_iv  =   _DarkArt_Xor_Crypt(substr($ciphertext, 0,  16));
    $dexorred_key =   _DarkArt_Xor_Crypt(substr($ciphertext, 16, 48));
    //Now the rest stuff is the ciphertext
    $cipher_start_offset = 48;
    $cipher_length = strlen($ciphertext) - 48;
    $message_data  = substr($ciphertext, $cipher_start_offset, $cipher_length);
  
    $decryptedbuf = openssl_decrypt(
      $message_data,
      "AES-256-CBC",
      $dexorred_key,
      OPENSSL_RAW_DATA,
      $dexorred_iv
    );
  
    return $decryptedbuf;
  }
  
function lazylog($msg,$tag){ echo "<$tag>$msg</$tag><br>";}
$msg = "Hello NTI, This is a quick example of Rami's Dark Art encryption function; be advised.";
$enc = _AES256_Encrypt_CBC($msg);
$dec = _AES256_Decrypt_CBC($enc);

lazylog("Message To Encrypt:<br><span>$msg</span><br>", "p");
lazylog("Encrypted :<br><span>$enc</span>","p");
lazylog("Decrypted :<br><span>$dec</span>","p"); 
?>
