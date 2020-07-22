<!--<!DOCTYPE html>-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <!-- Importing bootstrap 3.0 and css -->
    <link href="css/all.css" rel="stylesheet">
        <link href="css/brands.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <title>Hommies On The Loose</title>

    <script src="js/lumino.glyphs.js"></script>

</head>
<body>                                          1 

	<!-- Top bar.....bread crumps -->

<div class="nav main-header" id="top-navigation">
<div id="top-navigation-logo">

  <!-- Logo and Text on the Left Side of the Top bar -->

<span>
<!--<img id="img-logo" src="img/logo.png" alt="Logo"/>-->
<a href="#" class="header_text"><p id="header-text" class="text-muted">SpeedyDev<span style="color:blue">CHat</span></p></a>
</span>
</div>



<!-- Welcome and Username at the right side of the Top Bar -->
<div id="top-navigation-username">

<span id="my_profile_picture"></span>

<!-- Working with the dp -->
<div id="dp_form_holder">
<form method="post" action="" enctype="multipart/form-data">
  <input type="file" name="file" id="file"/>
  <input type="submit" name="submit_file" id="submit_file"/>
</form>
</div>

<span style="color:white; margin-top:3px"><em>Welcome,&nbsp;</em></span>
<span style="margin-top:3px"><strong><?php echo ($_COOKIE["user_first_name"]); ?></strong></span>
</div>
</div>

<!-- End Of Top Bar -->

<div class="mycontainer">

	<!-- Side bar begins -->

    <div class="navigations">
        <ul class="lists">
            <li><a style="border-left:4px solid rgba(69, 162, 255, 0.93); border-radius:10px" href="Main_Dashboard.php"><img src="img/dashboard.png" class="navimg img-responsive"/><span class="nav-writting">Dashboard</span></a></li>
            <li><a href="General_Message/General_Message.php"><img src="img/chat-1.png" class="navimg img-responsive" /><span class="nav-writting">Public Chat</span></a></li>
            <li><a href="Private_Message/Private_Message.php"><img src="img/send-file.png" class="navimg img-responsive" /><span class="nav-writting">Private Chat</span></a></li>
            <li><a href="General_Share/General_Share.php"><img src="img/businessman.png" class="navimg img-responsive" /><span class="nav-writting">Public Share</span></a></li>
            <li><a href="Private_Share/Private_Share.php"><img src="img/remove-user.png" class="navimg img-responsive" /><span class="nav-writting">Private Share</span></a></li>
            <li><a href="General_announcement/general_announcement.php"><img src="img/log-file-format-1.png" class="navimg img-responsive" /><span class="nav-writting">General Announcements</span></a></li>
            <li onclick="Logout()"><a href="../index.php"><img src="img/logout.png" class="navimg img-responsive" /><span class="nav-writting">Logout</span></a></li>
        </ul>
    </div>

    <!-- Side Bar Ends Here -->

    <!-- Dashboard Content Starts Here With Jumbotron -->

  <div class="content">
  <div class="col-sm-8 col-md-10 col-lg-12 main">     
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"></h1>
      </div>
    </div><!--/.row-->
      
    <!--Begin Main Content-->

  <div class="container-fluid">
    <div class="col-md-4">
        <a class="btn btn-block btn-lg btn-primary data-toggler" href="team-member.php"><i class="fas fa fa-user-cog" style="mr-auto,">Team</i></a>
    </div>            
	<div class="col-md-4">		
		<a class="btn btn-block btn-lg btn-success" href="clients.php"><i class="fas fa fa-hand-holding-usd" style="text-aline center, mr-auto">Clients</i></a>
    </div>
	<div class="col-md-4">	
		<a class="btn btn-block btn-lg btn-warning" href="projects.php"><i class="fas fa fa-sd-card" style="text-aline center, mr-auto">Projects</i></a>
    </div>
</div class="member-area">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

<hr>



<table id="example" class="table-striped table-bordered" style="width:100%">

	<thead>
        <tr>
            <th>Surname</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Designation</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </tbody>
			</table>



  <script src="  https://code.jquery.com/jquery-3.5.1.js
"></script>  
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js
"></script>
  <script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
  </script> 


 <script type="text/javascript">
  function Logout(){
    $.get("Logout/Logout.php");
}
 </script>

 <script type="text/javascript">

 $(document).ready(function(){

  $("#my_profile_picture").load("Get_Profile_Picture.php");

  $(" #my_profile_picture").click(function(){
  $('#file').trigger("click");
});

  $("#file").change(function(){
    $("#submit_file").trigger("click");
  });

  $("#submit_file").click(function(){
      $(this).submit();
  });

  $("#submit_file").submit(function(){
    $("#my_profile_picture").load("Get_Profile_Picture.php");
  });

});
 </script>

</body>
</html>
