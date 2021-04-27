<?php

namespace App;

use phpseclib\Crypt\Blowfish;
use Illuminate\Contracts\Encryption\Encrypter as EncrypterContract;

class BlowfishEncrypter implements EncrypterContract{
    protected $encrypter;
    protected $key;

    public function __construct(string $key){
        $this->encrypter = new Blowfish();
        $this->encrypter->setKey($key);
        $this->key = $key;
    }

    public function encrypt($value, $serialize = true){
        return $this->encrypter->encrypt($value);
    }

    public function decrypt($payload, $unserialize = true){
        return $this->encrypter->decrypt($payload);
    }

    public function getKey(){
        return $this->key;
    }
}