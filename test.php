<?php
  $ips = array( "23.104.156.219", "176.31.120.171" );

  echo "IP;Reverse DNS;R&eacute;solution DNS\n";

  foreach($ips as $ip) {
    echo $ip.";";
    $addr = gethostbyaddr($ip);
    echo $addr.';';
    $name = gethostbyname($addr);
    echo $name."\n";
  }
?>

