<?php include 'includes/helpers.inc.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style media="screen">
        .margin-custom{
          margin: 10px auto;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="col-md-8 margin-custom">
            <h1>Your Shopping Cart</h1>
            <?php if(count($cart) > 0){ ?>
          </div>
      </div>
		 <div class="row">
     <div class="col-md-8 margin-custom">
       <table class="table table-bordered table-hover" border="1">
         <thead class="thead-dark">
           <tr>
             <th>Item Description</th>
             <th>Price</th>
           </tr>
         </thead>
         <tbody>
          <?php foreach ($cart as $item): ?>
          <tr>
            <td><?php htmlout($item['description']); ?></td>
            <td>
            $<?php echo number_format($item['price'], 2); ?>
            </td>
          </tr>
          <?php endforeach; ?>
          </tbody>

          <tfoot>
            <tr>
              <td>Total:</td>
              <td>$<?php echo number_format($total, 2); ?></td>
            </tr>
          </tfoot>
       </table>
     </div>
     <div class="col-md-8 margin-custom">
     <?php } else { ?>
        <p>Your cart is empty!</p>
     <?php } ?>

        <form action="?" method="post">
          <p>
            <a href="?">Continue shopping</a> or
            <input type="submit" name="action" class="btn btn-danger" value="Empty cart">
          </p>
        </form>

     </div>

		</div>
	</div>

  </body>
</html>
