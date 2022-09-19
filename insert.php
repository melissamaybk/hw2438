<html>
<body>

<?php

	// set your infomation.
	$host		=	'localhost';
	$user		=	'root';
	$pass		=	'';	
	$database	=	'people';
	
	
	// connect to the mysql database server.
	$connect = @mysql_connect ( $host, $user, $pass ) ;

	if ( $connect )
	{
		mysql_select_db ( $database, $connect );

		$query="INSERT INTO contacts (Phone, Fname, Lname, Job)
			VALUES
			('$_POST[Phone]','$_POST[Fname]','$_POST[Lname]','$_POST[Job]')";

		
		if ( @mysql_query ( $query ) )
			{
				echo 'Record Added Successfuly';
			}
			else {
				die ( mysql_error() );
			}	
	        
	}
	else {
		trigger_error ( mysql_error(), E_USER_ERROR );
	}

	

        
			
?>


</body>
</html>