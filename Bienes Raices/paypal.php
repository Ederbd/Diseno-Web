<?php 

//url aquispe
define('URL_SITIO', 'http://127.0.0.1:5500/anuncio.html');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        '',     // ClientID
        ''      // ClientSecret
    )
);

