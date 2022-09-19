<html>
<head>
   <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Contacts table

<img src="beach.jpeg" height=200 width=200 align=center><br>
</h1>
<h3>
    Update Page
</h3>
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
        $sql = "SELECT * FROM contacts WHERE (Phone='$_GET[Phone]')";
        
        if ( @mysql_query ( $sql) )
        {
            $query = mysql_query ( $sql );
            $row = mysql_fetch_assoc ( $query );
            

            do{
                ?>
                <h3>   
                    <form action="update.php?Phone=Phone" method="post">
                        
                        Phone Number: <?php echo $row['Phone'];?> <input type="number" hidden value=<?php echo $row['Phone'];?> name="Phone"/>
                        <br><br>
                        First Name: <?php echo $row['Fname'];?>
                        <br><br>
                        Last Name: <?php echo $row['Lname'];?>
                        <br><br>
                        Job Title: <?php echo $row['Job'];?>
                        <br><br>
                        Enter New First Name: <input type="text" name="Fname"/>
                        <br><br>
                        Enter New Last Name: <input type="text" name="Lname"/>
                        <br><br>
                        Enter New Job Title: <input type="text" name="Job"/><br>
                        <br>
                    <input type="submit" />

                    
                </h3>
        
                        
        <?php

    }while($row = mysql_fetch_assoc($query));
    
    ?>
    
<?php
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
