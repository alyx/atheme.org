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
	<meta name="language" content="English">
	<meta http-equiv="expires" content="never">
	<meta name="author" content="Sam Ferry">
	<meta name="copyright" content="(c)The Atheme Project">
	<meta name="description" content="An open-source development collective, dedicated to creating powerful libraries and software for end-user benefit through collaboration and sophistication.">
	<meta name="keywords" content="the atheme project, atheme.org, atheme.net, atheme, irc, irc services, charybdis, charybdis-ircd, ircd, irc client, git, confluence, jira, CIA, CIA.vc, revision control, version control, staticbox, staticbox.net, SystemInPlace, nenolod, samferry, william pitcock, sam ferry, audacious, audacious-plugins, audacious media player, NASPRO, atheme-services, atheme-web, atheme irc services, iris, libmowgli, libguess, MCS, libaosd, ShadowIRCd, UnrealIRCd, Debian, Debian Linux, Linux, UNIX, VPS, Xen, freenode">
	<meta name="distribution" content="global">
	<meta name="robots" content="INDEX,FOLLOW">
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-30065060-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
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
		<li><a href="http://webchat.staticbox.net/?channels=#atheme-project">Webchat</a></li>
		<li><a href="http://git.atheme.org">Repository</a></li>
		<li><a href="http://confluence.atheme.org">Wiki</a></li>
		<li><a href="http://jira.atheme.org">Bug Tracker</a></li>
		<li><a href="http://distfiles.atheme.org">Files</a></li>
		<li><a href="http://cia.vc">CIA</a></li>
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
		<div style="float: right;"><a href="http://git.atheme.org/atheme.org/">changelog</a> &mdash; <a href="http://www.atheme.org/todo">to-do</a> &mdash; <a href="http://www.google.com/recaptcha/mailhide/d?k=01_KdCrWI_IjA21lIMmtTcxg==&c=UAOgf9DDXzj1xJpkX6wNUzEUGrnDZDs9Zz7-uSVHqqk=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k=01_KdCrWI_IjA21lIMmtTcxg==&c=UAOgf9DDXzj1xJpkX6wNUzEUGrnDZDs9Zz7-uSVHqqk=', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;">webmaster</a></div>
	</div>
</div>
</body>
</html>
