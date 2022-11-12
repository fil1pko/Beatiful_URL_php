<?php

//header
include "parts/head.php";

//site template
$url_path = parse_url( $_SERVER[ 'REQUEST_URI' ], PHP_URL_PATH );


if( ($url_path == "/") || ($url_path == "") ){
  $url_path = "/home";
} 

include "pages$url_path.php";
//footer
include "parts/footer.php";

?>