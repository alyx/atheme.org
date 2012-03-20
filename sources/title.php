<?php
function title()
{
	if ((isset($_GET["p"])) && ($_GET["p"] == "index"))
	{
		echo "The Atheme Project";
	}
	else if (isset($_GET["p"]))
	{
		if (($_GET["p"] == "projects") && (isset($_GET["sp"])))
		{
			echo ucfirst(strtolower($_GET["sp"])) . " | The Atheme Project";
        	}
	        else
	        {
			echo ucfirst(strtolower($_GET["p"])) . " | The Atheme Project";
        	}
	}
	else
	{
		echo "The Atheme Project";
	}
}
?>
