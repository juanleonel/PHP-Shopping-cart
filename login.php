

<?php 
  include_once 'includes/helpers.inc.php'; 
  //require_once __DIR__.'/auth.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <title>Catalog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style media="screen">
      .margin-custom{
        margin: 10px auto;
      }
    </style>
  </head>
  <body>
      <div class="container">
        <div class="row"  >
           <div class="col-md-6 margin-custom">
              <h2>Login</h2>
           </div>
       </div>
          <div class="row"  >
            <div class="col-md-6 margin-custom">

            <div class="whole">
                <?php if (isset($_GET['error'])) { ?>
                  <div  class="alert alert-danger" role="alert"><?php echo htmlspecialchars(urldecode($_GET['error'])) ?></div >
                <?php } else { ?>
                  <span class="alert--error"></span>
                <?php } ?>                 
            </div>


            <form action="auth.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">              
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              
              <input type="submit" class="btn btn-primary" name="login" value="Log in">
            </form>
            </div>
          </div>

      </div>

  </body>
</html>
