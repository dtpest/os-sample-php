<?php
$connStr = "host=" . $_ENV['POSTGRESQL_PORT_5432_TCP_ADDR'] . " port=5432 dbname=" . $_ENV['POSTGRESQL_DATABASE'] . " user=" . $_ENV['POSTGRESQL_USER'] . " password=" . $_ENV['POSTRESQL_PASSWORD'] . " options='--application_name=$appName'";
echo $connStr . "<br />";
$conn = pg_connect($connStr);
var_dump($conn);
echo "<h1 style='text-align:center'>Peter</h1><pre>";
var_dump($_ENV);
phpinfo();
?>
