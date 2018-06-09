<?php
header("content-type:text/html;charset=utf-8");
require './common/connection.php';
$con=get_connect();
$rs=mysqli_query($con,'select * from student');
$result=mysqli_fetch_all($rs,MYSQLI_ASSOC);
ECHO '<PRE>';
PRINT_R($RESULT);
ECHO '</PRE>';

?>