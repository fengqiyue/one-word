<?php
	$journalupdate = date("Y-m-d H:i:s");
	 
	$journalwords = $_POST["words"];

	echo "content:".$journalwords."<br>";
	echo "time:".$journalupdate;

	$con = mysql_connect("localhost","root","123456");

	if (!$con)
	{
		die('Could not connect: '. mysql_error());
	}

	mysql_select_db("journal", $con);
	mysql_query("INSERT INTO journal (journal_content, journal_time) VALUES ('$journalwords', '$journalupdate')");
	/*
	if(!mysql_query("INSERT INTO journal (journal_content, journal_time) VALUES ('$journalwords', '$journalupdate')"))
		die(mysql_error());*/
              mysql_close($con);
?>
