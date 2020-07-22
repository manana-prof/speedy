<?php
 include("Main_dashboard.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("partials/head.php")
?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Section</title>
</head>
<body>

<h3>Customer Section</h3><b>
<?php
include("partials/add_button.php")
?>
<hr>
<table id="example" class="table-striped table-bordered" style="width:100%">
	<thead>
        <tr>
			      <th>Municipality</th>
            <th>Contact Person</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Designation</th>
			      <th>Department</th>
            <th>Project Data</th>        
      
		</tr>
    </thead>

          <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
        				<td></td>
                <td></td>
                <td></td>

           </tr>
			</tbody>
			</table>

<?php
include("partials/js_script.php")
?>
<?php
include("partials/table_script.php")
?>
  
</body>
</html>
