<?php 
echo "El status de la secion es ". session_status();
session_start();
echo "<br> El status de la secion es ". session_status();
session_destroy(); 


?>