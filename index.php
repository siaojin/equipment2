<?php
$serverName = "MYPENLT-FB5BPC2"; 
$connectionInfo = array( "UID"=>"siaoteo", "PWD"=>"Lovebaby0730", "Database"=>"Equiment");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}


$sql = "INSERT INTO EQUIPMENT VALUES('E00005','PXI','B','Available')";
$stmt = sqlsrv_query( $conn, $sql );
sqlsrv_free_stmt( $stmt);

$sql = "SELECT * FROM EQUIPMENT";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $row['Equiment Number'].", ".$row['Equiment Name'].", ".$row['Serial Number'].", ".$row['Status']."<br />";
}




sqlsrv_free_stmt( $stmt);
?>