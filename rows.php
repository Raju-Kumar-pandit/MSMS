<?php
$chkbox = $_POST['chk'];
$txtbox = $_POST['txt'];

foreach($txtbox as $a => $b)
  echo "$chkbox[$a]  -  $txtbox[$a] <br />";

?>