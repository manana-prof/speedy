<?php include("db_connection.php")?>
<?php include("Main_Dashboard.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("partials/head.php")?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Information Area</title>
</head>
<body>
<?php include("partials/add_button.php")?>
<hr>
<table id="#example" class="table-striped table-bordered" style="width:100%">
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
</tbody>
 </table>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
      "ajax" :{
        "url":"data.php",
        "dataSrc" : " "
      },
      "columns" :  [
        {"data":"Municipality"},
        {"data":"Contact Person"},
        {"data":"Email"},
        {"data":"Phone"},
        {"data":"Designation"},
        {"data":"Deapartment"},
        {"data":"ProjectData"},

      ] 
    });
});
</script>   

 <?php include("partials/table_script.php")?>
 <?php include("partials/js_script.php")?>

 

</body>
</html>