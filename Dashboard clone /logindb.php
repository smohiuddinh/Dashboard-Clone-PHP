
<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "" ; 
$db_name = "TasDashboard"; 
$conn = "" ; 


try {
    $conn = mysqli_connect($db_server, $db_user , $db_pass , $db_name) ;
    //echo "Connection established" ;
}

catch (Exception $e) {
    echo "error connecting to database" . $e->geteMassage(); 
}



?>

