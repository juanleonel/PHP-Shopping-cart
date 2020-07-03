 
<?php // sessiontest.php
  session_start();

  if (!isset($_SESSION['count'])) 
    $_SESSION['count'] = 0;
  else 
    ++$_SESSION['count'];

  echo $_SESSION['count'];

/*
   $db = new mysqli('localhost', 'ujuan', 'root', 'simpleshopping');

  if($db->connect_errno)
  {
      echo "Lo sentimos, este sitio web está experimentando problemas.";

      echo "Error: Fallo al conectarse a MySQL debido a: \n";
      echo "Errno: " . $db->connect_errno . "\n";
      echo "Error: " . $db->connect_error . "\n";

      exit;
  }

  $db->close();

  echo "Success!";*/
?>
 
 