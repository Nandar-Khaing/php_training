<?php
if (extension_loaded('openssl')) {
   $testKey = @openssl_pkey_new();   
   if (is_resource($testKey)) {
   } else {
      echo ' Please check the integration of the PHP OpenSSL extension and if it is installed correctly.';
   }    
}
