<?php
  $db = new mysqli('localhost', 'ujuan', 'root', 'simpleshopping');

  if($db->connect_errno)
  {
      echo "Lo sentimos, este sitio web está experimentando problemas.";

  		echo "Error: Fallo al conectarse a MySQL debido a: \n";
  		echo "Errno: " . $db->connect_errno . "\n";
  		echo "Error: " . $db->connect_error . "\n";

  		exit;
  }
