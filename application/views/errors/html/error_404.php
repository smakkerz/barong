<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #E13300; color: #000fda; }
::-moz-selection { background-color: #E13300; color: #00fba7; }

html, body{
	font-family: 'Ubuntu', sans-serif;
	font-size: 100%;
	background: #002;
}

body {
  padding-top:10px;
}

a {
  outline: thin dotted;
  outline: 0px auto -webkit-focus-ring-color;
  outline-offset: 0px;
  text-decoration:none;
}

h1 {
	color: #fff;
  margin: .67em 0;
  font-size: 2em;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
  padding: 2px 4px;
  color: #c7254e;
  white-space: nowrap;
  background-color: #f9f2f4;
  border-radius: 4px;
}

#container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
	<div id="container">
		<h1 align="center"><?php echo $heading; ?></h1>
		<p><?php echo $message; ?></p>
	</div>
</body>
</html>