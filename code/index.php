<?php
//phpinfo();
$user = 'root';
$pass = 'example';
$server = '172.20.0.3';

$dbh = new PDO( "mysql:host=$server", $user, $pass );
$dbs = $dbh->query( 'SHOW DATABASES' );

while( ( $db = $dbs->fetchColumn( 0 ) ) !== false )
{
    echo $db.'<br>';
}
