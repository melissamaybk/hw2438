<html>
<head>
   <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Contacts table

<img src="beach.jpeg" height=200 width=200 align=center><br>
</h1>

<h2> Display Page </h2>

<table style="width=80%" border ="1">
    <tr>
        <th>First Name </th>
        <th>Last Name </th>
        <th>Job Title </th>
        <th>Phone Number </th>
    </tr>
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
        $sql = "SELECT * FROM contacts";
        
        if ( @mysql_query ( $sql) )
        {
            $query = mysql_query ( $sql );
            $row = mysql_fetch_assoc ( $query );
            
            do {
                ?>
                <tr>
                    <td><?php echo $row['Fname'];?></td>
                    <td><?php echo $row['Lname'];?></td>
                    <td><?php echo $row['Job'];?></td>
                    <td><?php echo $row['Phone'];?></td>
                    <td><a href="formUpdate.php?Phone=<?php echo $row['Phone']?>"> Update </a></td>
                    <td><a href="delete.php?Phone=<?php echo $row['Phone']?>"> Delete </a></td>
                </tr>
                
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