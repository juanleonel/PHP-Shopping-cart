<?php 
	
	include 'includes/connection.inc.php';


	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		err();
	}

	if (empty($_POST['login']) || empty($_POST['email']) || empty($_POST['password'])){
		err("Los campos no deben de estar vacios!");	
	}  
 


 	function err($m = 'Error al authenticar') 
 	{       
        header("Location: login.php?error=" . urlencode($m));
        return;
    }

    function getHash($pws){
    	return password_hash($pws, PASSWORD_DEFAULT);
    }

 	try {

 		$email = $_POST['email'];
 		$password = $_POST['password'];

 	 

  		$result = $db->prepare('select * from  users where email = ?');
  		$result->bind_param('s', $email);
  		$result->execute();
  		
  		$data = $result->get_result();

  		 
  		$db->close();


  		if (!$data) {
  		 	err("Invalid username/password combination");
  		}
  		elseif ($data->num_rows > 0) {
  		 	
  		 	$fields = $data->fetch_assoc();

  		 	if (password_verify( $password , $fields['password'])) {
  		 		 
  		 		 /*
  		 		 session_start();       
  		 		 $_SESSION['name'] = $fields['name'];        
  		 		 $_SESSION['last_name']  = $fields['last_name'];
  		 		 $_SESSION['email']  = $fields['email'];
  		 		 */
  		 	}
  		 	else {
  		 		err("Invalid username/password combination");
  		 	}  		 	

		 }else{
		 	die("Sin resultados");
		 }




    } catch (Exception $e) 
    {
        return err('hubo un problema');
    }




 ?>