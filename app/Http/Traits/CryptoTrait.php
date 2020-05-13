<?php
namespace App\Http\Traits;

trait CryptoTrait {

    /**
     * Encrypts an object with aes-256-cbc to use as a token
     * @param $data An object to encrypt
     * @param $secret The secret to encrypt data with
     * @return \Illuminate\Http\Response
     */
    public function encrypt($data, $secret)
    {
        $method = 'AES-256-CBC';
        $iv             = openssl_random_pseudo_bytes(16);
        $ciphertext     = openssl_encrypt(json_encode($data), $method, $secret, OPENSSL_RAW_DATA, $iv);
        $ciphertext_64  = base64_encode($ciphertext);
        $iv_64          = base64_encode($iv);
        return "$ciphertext_64.$iv_64";
    }
}