<?php

//This is a comment in PHP.
// <--those two slashes mark the beginning of a single-line comment

/************************
* This is               *
* a multi-line          *
* comment, make         *
* as                    *
* many comment          *
* lines as you want to! *
************************/

// Below is a INCLUDE file, 
//which includes another file into the PHP document.
//You do not HAVE TO use an include file, but it makes
//it easier to keep the website up-to-date, and edited.
//
//PHP Include allows HTML, TXT, PHP, pretty much ANY type
//of document.
//
//This allows for editing ONE FILE and it will update on ALL PAGES
//that it is included in.
//

include ("header.txt");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--^^Above is a doctype, which is required for a web browser to be able to tell what type of HTML it is, in this case, Transitional, which you should always begin with-->

<html>
	<head>
		<title>Lesson 1 - PHP</title>
		<link rel="stylesheet" href="default.css" type="text/css" /> <!--the "href" can be any filename that you want.-->	
	</head>
	
	<body>
		<p>This is a basic PHP-type document, which has HTML in it, as you can see here (right-click and "View Source").</p>	
	</body>
</html>