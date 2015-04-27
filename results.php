<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reverse DNS Checker</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <header class="page-header">
        <h1>Reverse DNS Checker</h1>
        <p>Un outil pour vérifier les adresses IP.</p>
      </header>
      <div class="row">
<?php
error_reporting(E_ALL );
ini_set('display_errors', '1');

if(isset($_POST['list']) && !empty($_POST['list'])) {
//  $ips = nl2br($_POST['list']);
//  $ips = explode('<br />', $ips);
  $ips = explode("\n", str_replace("\r", "", $_POST['list']));

//  print_r($ips);

  echo "IP;Reverse DNS;R&eacute;solution DNS<br/>";

  foreach($ips as $ip) {
    echo $ip.";";
    $addr = gethostbyaddr($ip);
    if(isset($addr)) echo "toto";
    echo $addr.';';
    $name = gethostbyname($addr);
    if(isset($name)) echo "tata";
    echo $name.'<br />';
  }
}
else {
?>
        <div class="panel panel-danger">
          <div class="panel-heading">
            <p class="panel-title">Pas de données</p>
          </div>
          <div class="panel-body">
            <p><span class="glyphicon glyphicon-exclamation-sign"></span> Aucune donnée n'a été spécifiée ou une erreur est survenue.<br />
            Rendez-vous <a href="index.php">ici</a> pour recommencer.</p>
          </div>
	</div>
<?php
}
?>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
