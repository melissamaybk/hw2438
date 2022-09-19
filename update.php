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

        $query = "UPDATE contacts 
        SET
        Fname='$_POST[Fname]',
		Lname='$_POST[Lname]',
		Job='$_POST[Job]'
		WHERE Phone='$_POST[Phone]'";
        
		if ( @mysql_query ( $query ) )
        {
            echo 'Record Updated Successfuly';
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