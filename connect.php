<?php
 $db_host ="localhost";
 $db_user ="root";
 $db_password ="";
 $db_name ="form";
    $con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
    if(mysqli_connect_error()){
    	echo "connect to database failed";
    }
    ?>