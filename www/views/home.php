<?php require 'require.php';
date_default_timezone_set('America/mazatlan');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../favicon.ico">

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet">

  <!--<link href="/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

  <!-- Custom styles for this template -->
  <link href="../css/dashboard.css" rel="stylesheet">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../docs/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <!--<script src="/docs/assets/js/ie-emulation-modes-warning.js"></script>-->
  <script src="../js/jquery-3.0.0.js" type="text/javascript"></script>
  <script src="../js/jquery-3.0.0.min.js" type="text/javascript"></script>
  <script src="../js/jquery-migrate-1.4.1.js" type="text/javascript"></script>
  <script src="../js/jquery-migrate-1.4.1.min.js" type="text/javascript"></script>
  <script src="../js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../js/cargar.js" type="text/javascript"></script>


  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/redmond/jquery-ui.css" type="text/css" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="../js/html5shiv.min.js"></script>
      <script src="../js/respond.min.js"></script>
  <![endif]-->
</head>
<body >
<?php require 'require.php';
if ( User::requireUsuarioLocal() )
{
	echo View::load('menuLocal');
}
else
{
	echo View::load('menuPT');
}
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-0 col-md-12 col-md-offset-0 main" id="conten">
      <div class="table-responsive">
        <?=$content?>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<!--<script src="/docs/assets/js/vendor/holder.min.js"></script>-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="/docs/assets/js/ie10-viewport-bug-workaround.js"></script>-->


</body>
</html>