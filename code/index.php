<?php
//phpinfo();
$user = 'root';
$pass = 'example';
$server = 'containerID_of_MYSQL_server';

$dbh = new PDO( "mysql:host=$server", $user, $pass );
$dbs = $dbh->query( 'SHOW DATABASES' );

while( ( $db = $dbs->fetchColumn( 0 ) ) !== false )
{
    echo $db.'<br>';
}
