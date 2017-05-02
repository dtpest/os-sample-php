<?php
$connStr = "host=" . $_ENV['POSTGRESQL_PORT_5432_TCP_ADDR'] . " port=5432 dbname=postgres user=postgres options='--application_name=$appName'";
echo $connStr . "<br />";
echo "<h1 style='text-align:center'>Peter</h1><pre>";
var_dump($_ENV);
phpinfo();
?>
