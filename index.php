<?php
require_once 'vendor/autoload.php';
use phpseclib\Crypt\RSA;
$rsa = new RSA();

$rsa->loadKey('<RSAKeyValue><Modulus></RSAKeyValue>');
$privatekey = $rsa->getPrivateKey();
echo $privatekey;
