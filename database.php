<?php
$host="localhost";
$port="5432";
$dbname="project";
$user="postgres";
$pass="root";
$con="host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

$db_connect= pg_connect($con);

if(!$db_connect)
   die("could not connect to database");
else
    echo("connected successfully");



?>