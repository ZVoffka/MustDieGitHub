<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang-"en" lang="en">

<head>
       <meta http-equiv="content-type" content="text/html; charset=utf-8" />

       <link href="css/reset.css" rel="stylesheet" type="text/css"/>
       <link href="css/style.css" rel="stylesheet" type="text/css"/>
       <title>Интернет-Магазин Цифровой Техники</title>
	<style>
	li{
	    list-style-type: none;
}
	</style>
</head>
<body>

<div id="block-body">
<?php
	include("include/block-header.php");
?>
<div id="block-right">
<?php
	include("include/block-category.php");
	include("include/block-parameter.php");
?> 
</div>

<div id="block-content"></div>

<?php
	include("include/block-footer.php");
?>
</div>

</body>
</html>	

