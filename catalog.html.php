<?php include_once 'includes/helpers.inc.php'; ?>
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
           <div class="col-md-8 margin-custom">
             <p > your shopping cart contains  <?php echo $total = (isset($_SESSION['cart'])) ? count($_SESSION['cart']) : 0 ;  ?><span> items </span> </p>
             <p > <a class="btn btn-primary" href="?cart">View your cart.</a> </p>
           </div>
       </div>
          <div class="row"  >
            <div class="col-md-8 margin-custom">
            <table  class="table table-bordered table-hover" border="1">
              <thead class="thead-dark">
                <tr>
                  <th>Item Description</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($item = $result->fetch_assoc()) {?>
                  <tr>
                    <td><?php htmlout($item['description']); ?></td>
                    <td><?php number_format(htmlout($item['price']), 2); ?></td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="id" value="<?php  htmlout($item['id']) ?>">
                        <input type="submit" class="btn btn-primary" name="action" value="Buy">
                      </form>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            </div>
          </div>

      </div>

  </body>
</html>
