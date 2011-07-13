<?php
	include "sources/title.php";
	$x = $_SERVER['REQUEST_URI'];
	if ($_SERVER['HTTP_HOST'] != "www.atheme.org")
	{
		if ($x == "/")
			header("Location: http://www.atheme.org");
		else
			header("Location: http://www.atheme.org$x");
	}
?>
<html>
<head>
<title><?php title(); ?></title>
<link rel="stylesheet" href="http://www.atheme.org/assets/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="http://www.atheme.org/assets/additional.css" type="text/css" media="all" />
<meta name="keywords" content="ircd irc services atheme audacious2 libmowgli atheme-services nenolod samferry sam charybdis ratbox irssi patches scripts athemenet staticbox chatautism efnet freenode">
<meta name="author" content="http://www.atheme.org">
</head>
<body>
<div id="wrapper">
	<div id="header">
		<a href="http://www.atheme.org" style="border-bottom: none;" title="The Atheme Project"><img src="http://www.atheme.org/assets/logo.png" alt="The Atheme Project" /></a>
	</div>
	<div id="navbar">
	<ul>
		<li><a href="http://www.atheme.org/">Home</a></li>
		<li><a href="http://www.atheme.org/projects">Projects</a></li>
		<li><a href="http://www.atheme.org/contact">Contact Us</a></li>
		<li><a href="http://git.atheme.org">Repository</a></li>
		<li><a href="http://confluence.atheme.org">Wiki</a></li>
		<li><a href="http://jira.atheme.org">Bug Tracker</a></li>
		<li><a href="http://distfiles.atheme.org">Files</a></li>
		<li><a href="http://cia.vc">CIA.vc</a></li>
	</ul>
	</div>

	<div id="body">
	<?php

	error_reporting(E_ALL);

        if (isset($_GET["p"]))
	{
		if (($_GET["p"] == "projects") && (isset($_GET["sp"])))
	        {
                        if (file_exists("pages/projects/" . $_GET["sp"] . ".php"))
                        {
                                include("pages/projects/" . $_GET["sp"] . ".php");
                        }
                        else
                        {
                                $sp = "pages/projects/404.php";
                                include($sp);
                        }
                }
		else
		{
			if (file_exists("pages/" . $_GET["p"] . ".php"))
			{
				include("pages/" . $_GET["p"] . ".php");
			}
			else
			{
				$page = "pages/404.php";
				include($page);
			}
		}
	}
	else
	{
		$page = "pages/index.php";
		include($page);
	}
	?>
	</div>

	<div id="footer">
		<div style="float: left;"><? print(date("Y")); ?> &copy; Atheme. All rights reserved.</div>
		<div style="float: right;"><a href="http://git.atheme.org/web/atheme.org/">changelog</a> &mdash; <a href="http://www.atheme.org/todo">to-do</a> &mdash; <a href="mailto:webmaster@atheme.org">webmaster</a></div>
	</div>
</div>
</body>
</html>
