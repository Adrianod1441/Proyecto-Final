<?php

function openCypher ($action='encrypt',$string=false)
{
    $action = trim($action);
    $output = false;

    $myKey = 'oW%c76+jb2';
    $myIV = 'A)2!u467a^';
    $encrypt_method = 'AES-256-CBC';

    $secret_key = hash('sha256',$myKey);
    $secret_iv = substr(hash('sha256',$myIV),0,16);

    if ( $action && ($action == 'encrypt' || $action == 'decrypt') && $string )
    {
        $string = trim(strval($string));

        if ( $action == 'encrypt' )
        {
            $output = openssl_encrypt($string, $encrypt_method, $secret_key, 0, $secret_iv);
        };

        if ( $action == 'decrypt' )
        {
            $output = openssl_decrypt($string, $encrypt_method, $secret_key, 0, $secret_iv);
        };
    };

    return $output;
};




function encrypt ($string) {
$key = "TIENE QUE SER LA MISMA EN LAS 2 FUNCIONES";
return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
}


function decrypt ($string) {
$key = "TIENE QUE SER LA MISMA EN LAS 2 FUNCIONES";
return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
}



function supercifrar ($string) {    
    //$cifrado1 = encrypt($string);
    //$cifrado2 = openCypher('encrypt',$cifrado1);
	$cifrado2 = openCypher('encrypt',$string);
    return $cifrado2;
    
}


function superdescifrar ($string) {
   $descifrado2 = $myText_decrypted = openCypher('decrypt',$string);
   //$descifrado1 = decrypt($descifrado2);
   //return $descifrado1;
   return $descifrado2;
}



?>
