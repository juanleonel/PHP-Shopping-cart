<?php
/*
   if(isset($_FILES['image'])){

/*
Su archivo se almacenará temporalmente
en esta ruta $ _FILES ['image_path'] ['tmp_name'].
así que cuando lo mueva, se eliminará de la carpeta temporal a su carpeta.
Si usa el comando copiar en lugar de move_uploaded_file,
su archivo temporal permanecerá en la carpeta temporal de su servidor.
puede buscar el nombre del archivo allí.

      if(!empty($_POST["name"]))
        echo $_POST["name"];

      //$img = file_get_contents('https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-22.png');

      var_dump($_FILES['image']["name"]);
      die();
      $errors= array();

      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type= $_FILES['image']['type'];
      $image_name = $_FILES['image']['name'];
      // devuelve un array apartir de una cadena, dividiendo o particionandolos
      // apartir de un delimitador.

      $explode =  explode('.',$image_name) ;

      // end devuelde el ultimo valor de un array
      $end =      end( $explode ) ;

      // convierte el valor de un string Mayuscula en minuscula.
      $file_ext=  strtolower( $end );

      // array de extenciones validos que aceptaremos
      $extensions= array("jpeg","jpg");

      // valida si el array $file_ext contiene las extenciones
      // declarados en el array $extensions

      if(in_array($file_ext,$extensions) === false){
         $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
      }

      // verificamos si el tamaño del archivo es mayor al indicado a 2MB
      // 2 millones 97 mil 152 bytes
      // 1 millon de bytes es igual a 1mb

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }

      //echo __DIR__;

      if(empty($errors)==true){
        if( move_uploaded_file($file_tmp, "C:/xampp/images/".$file_name ) )
            echo "Success";
        else
            echo "No";
      }else{
         print_r($errors);
      }
   }*/
?>
<html>
   <body>
<!--
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="text" name="name" placeholder="Nombre Imagen"/>
         <input id="submit" type="submit"/>
      </form>-->
      <p>
        latitude: <span id="latitude">&deg;</span><br>
        longitude: <span id="longitude">&deg;</span>
      </p>
      <input id="mood" value="rainbow">
      <button id="submit" >submit</button>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.js"></script>
      <script>
      /*
      window.addEventListener('load', function() {
          setup();
      })*/
        function setup() {
          const video =  createCapture(VIDEO);
          video.size(320,240);
          let lat, lon;
          const botton = document.getElementById('submit');

          botton.addEventListener('click', async event =>{

            const mood = document.getElementById('mood').value;
            video.loadPixels();
            const image64  = video.canvas.toDataURL();

            const data = {lat, lon, mood, image64};
            const options = {
              method: 'post',
              header: {
                'Content-Type': 'application/json'
              },
              body: JSON.stringify(data)
            }
            console.log(options);

            //const response  = await fetch('/api', options);
            //const json = await response.json();

            //console.log(json);
          });


          if ("geolocation" in navigator) {
            console.log('disponible');
            navigator.geolocation.getCurrentPosition(position =>{
              lat = position.coords.latitude;
              lon = position.coords.longitude;
              console.log(lat, lon);
              document.getElementById('latitude').textContent = lat;
              document.getElementById('longitude').textContent = lon;
            })
          }else{
            console.log('no works!');
          }

          //background(220);
          noCanvas();

        }
      </script>
   </body>
</html>


<!-- El tipo de codificación de datos, enctype, DEBE especificarse como sigue -->
<!--
<form enctype="multipart/form-data" action="post_form.php" method="POST">

    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />

    Enviar este fichero: <input name="fichero_usuario" type="file" />
    <input type="submit" value="Enviar fichero" />
</form>
-->
