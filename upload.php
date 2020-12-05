<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//require __DIR__ . '/aws.phar';
require 'vendor/autoload.php';

use Aws\S3\S3Client;

// TODO : indiquez le nom de votre bucket
$bucket = 's3-projet4';
                        
// TODO : les accès à AWS doivent déjà être configurés dans un fichier .ini sur votre machine
// Voir : https://docs.aws.amazon.com/aws-sdk-php/v3/guide/guide/credentials.html#credential-profiles


$s3 = new S3Client([
        // TODO : indiquez le nom de la région de votre bucket S3
        // Voir : https://docs.aws.amazon.com/fr_fr/general/latest/gr/rande.html
        'region' 		=> 'eu-west-3',
        'version' 		=> 'latest',
        'http'    => [

        	'verify' => 'C:/MAMP/bin/php/php7.4.1/cacert.pem'
    	],
        'credentials' 	=> [
        	'key'			=>"XXXXXXXX",
        	'secret' 			=> "XXXXXXXX",
        ]	
    ]);


// Envoi du fichier
$result = $s3->putObject(array(
    'Bucket' => $bucket,
    'Key'    => time() . '_' . $_FILES['uploadfile']['name'],
    'SourceFile' => $_FILES['uploadfile']['tmp_name'],
));

echo '<p>Fichier uploadé !</p>';
echo '<p><a href="' . $result['ObjectURL'] . '">' . $result['ObjectURL'] . '</a></p>';
echo '<p><img src="' . $result['ObjectURL'] . '" alt="" /></p>';