<?php
$HOST  =  "localhost";
$USER  = "root";
$PASS  = "";
$PORT ="3308";
$BANCO =  "projeto_teste";

$concta = mysqli_connect($HOST,$USER,$PASS,$BANCO,$PORT);
$db = mysqli_select_db($concta, $BANCO );


?>