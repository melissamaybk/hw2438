<html>
<body>

<?php

	// set your infomJobtion.
	$host		=	'localhost';
	$user		=	'root';
	$pass		=	'';	
	$database	=	'people';
	
	
	// connect to the mysql database server.
	$connect = @mysql_connect ( $host, $user, $pass ) ;

	if ( $connect )
	{
		mysql_select_db ( $database, $connect );

		$query="DELETE FROM contacts WHERE (Phone='$_GET[Phone]')";

		
		if ( @mysql_query ( $query ) )
			{
				echo 'Record Deleted Successfuly';
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