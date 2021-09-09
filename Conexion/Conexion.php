<?php
//$db_host="us-cdbr-east-04.cleardb.com"; //localhost
//$db_nombre="heroku_f7036baf347b6a5"; //primax
//$db_usuario="be638dfe02bc87";//root
//$db_pw="18c8a290";// ""
//$conexion=mysqli_connect($db_host,$db_usuario,$db_pw,$db_nombre);
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

?>