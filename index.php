<?php
  include 'includes/connection.inc.php';

  $sql = 'select * from products';

  //$db->query("insert into products (description, price) values ('test', 883.3);");
  session_start();


  $result = $db->query($sql);

  if (!isset($_SESSION)) {
    $_SESSION['cart'] = array();
  }
  // agregar producto al carrito
  if (isset($_POST['action']) and $_POST['action'] == 'Buy') {
    $_SESSION['cart'][] = $_POST['id'];
    header('Location: .');
    exit();
  }

  // limpiar la session/carrito
  if (isset($_POST['action']) and $_POST['action'] == 'Empty cart')
	{
		// Empty the $_SESSION['cart'] array
		unset($_SESSION['cart']);
		header('Location: ?cart');
		exit();
	}

  // ver el contenido del carrito
  if (isset($_GET['cart'])   ) {

    $cart = array();

    $total = 0;

    if (!empty($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $id) {
       foreach ($result as $product) {
         if ($product['id'] == $id) {
            $cart[] = $product;
            $total += $product['price'];
            break;
         }
       }
      }
    }



    include 'cart.html.php';
    exit();
  }



  include_once 'catalog.html.php';



  $result->free();
  $db->close();
