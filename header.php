<?php 
define('ASSETS_CSS',get_template_directory_uri()."/assets/css");
define('ASSETS_IMAGES',get_template_directory_uri()."/assets/images");
define('ASSETS_JS',get_template_directory_uri()."/assets/js");
 ?>
<!DOCTYPE html>
<html>
<head>
<title>NewsFeed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<?php wp_head() ?>


</head>
<body>