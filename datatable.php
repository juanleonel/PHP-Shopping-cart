 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <title>Catalog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
  </head>
  <body>

  	<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table> 
  	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
       <script type="text/javascript">
       	
       	(function() {

    		//$('#table_id').DataTable();
    		$('#table_id').DataTable( {
		        "processing": true,
		        "serverSide": true,
		        "ajax": "https://jsonplaceholder.typicode.com/posts",
		        "columns": [
		            { "data": "name" },
		            { "data": "hr.position" },
		            { "data": "contact.0" },
		            { "data": "contact.1" },
		            { "data": "hr.start_date" },
		            { "data": "hr.salary" }
		        ]
		    } );

		 	fetch('https://jsonplaceholder.typicode.com/posts')
			  .then(response => response.json())
			  .then(json => console.log(json))
		})();
       </script>
  </body>
</html>
