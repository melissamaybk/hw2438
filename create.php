<html>
<body>
<?php

	// set your infomation.
	$host		=	'localhost';
	$user		=	'root';
	$pass		=	'';	
	$database	=	'people';
	
	$sql = 'CREATE TABLE `contacts` (
		`Phone` int( 11 ) NOT NULL,
		`Fname` VARCHAR( 255 ) NOT NULL,
		`Lname` VARCHAR( 255 ) NOT NULL,
		`Job` TEXT NOT NULL,
		PRIMARY KEY ( `Phone` )
	       )';

	// connect to the mysql database server.
	$connect = @mysql_connect ( $host, $user, $pass ) ;

	if ( $connect )
	{
		// create the database.
		if ( ! @mysql_query ( "CREATE DATABASE $database" ) )
		{
			die ( mysql_error() );
		}
		else {
			mysql_select_db ( $database );
			if ( @mysql_query ( $sql ) )
			{
				echo 'Your new table was created successfully!';
			}
			else {
				die ( mysql_error() );
			}
		}
	}
	else {
		trigger_error ( mysql_error(), E_USER_ERROR );
	}

	

			
?>


</body>
</html>