<!DOCTYPE html>

<?php
session_start();
  include 'php_includes/db.php';
  $membrs = 'members';
      //Check whether session variable set
      if (isset($_SESSION['uname']))

       # code...
      {

      }
       else
        {
          echo "not logged in";
          header("location: login.php");
        }
    ?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="toastr/toastr.css" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	


	<link rel="stylesheet" 
href="css/datatables/dataTables.bootstrap.css"/>





    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="<?= basename($_SERVER['PHP_SELF'], ".php")?>">

<input type="hidden" id="onsite_message" value="<?php if (isset($_SESSION["onsite_message"])) {
    # code...
 echo $_SESSION["onsite_message"];} ?>">

    <div id="wrapper">

        <!-- Navigation -->
        
		 <div id="header">
		  <?php
		  include_once 'header.php';
		  
		  ?>
		  </div>
		
		
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            My Off-site Work
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
							<li>
                                <i class="fa fa-fw fa-arrows-v"></i>  <a href="#">Tickets</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Ticket Status
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

					
				 
                         <div class="table-responsive col-lg-12">
                            <table id="ticketStatusTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
										
										<th>Ticket Id</th>
                                        <th>Customer Name</th>
                                        <th>Email</th>                                        
                                        <th>Phone Number</th>
                                        <th>Product</th>
										<th>Description</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                      //View the complaints table
                      $tblmck= "tbl_mock";
                      $user = $_SESSION['uname'];
                      $sql = "SELECT * FROM $tblmck WHERE assigned_worker='$user' AND fk_status='1'";
                      $ans = mysql_query($sql);
                        while ($record = mysql_fetch_array($ans))
                      {
                            echo '<tr>';
                            echo '<td>'. $record['id']."</td>";
                            echo "<td>". $record['c_name']."</td>";
                            echo "<td>". $record['c_email']."</td>";
                            echo "<td>". $record['c_mobile']."</td>";
                            echo "<td>". $record['product']."</td>";
                            echo "<td>". $record['description']."</td>";
                            echo '<td><button type="button" value="Onsite" class=" bton btn btn-info btn-half">
                                            <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Onsite
                                            </button>
                                            <button type="button" value="Complete"class="bton btn btn-success btn-half">
                                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Complete
                                            </button></td>';
                            echo "</tr>";
                      }
                    ?>
                                </tbody>
                            </table>
                        
                    </div>
                

				

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

	<!-- toastr -->
	<script src="toastr/toastr.js"></script>
	
	
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript" 
src="js/datatables/jquery.dataTables.min.js"></script>

<script type="text/javascript" 
src="js/datatables/dataTables.bootstrap.js"></script>

<script>
	
$(function() {
	$('#ticketStatusTable').dataTable( {
        "createdRow": function ( row, data, index ) {
                $('td', row).eq(5).addClass('highlight');
        }
    } );
	
	toastr.options = {
						"positionClass": "toast-bottom-right",
					 }
		
    
	var message_movedOnsite = $(document).find('#onsite_message').val();
	
	if(message_movedOnsite != '')
	{
		toastr.info(message_movedOnsite);
		
	}
} );
	</script>


                 <script>$('.bton').on('click', function ()
                  {
                    x=( $(this).parent().parent().find('td:first').text());
                    //document.getElementByid('comp_id') = x;
                    if (this.value == "Onsite"){
                      y=2;
                    }
                    else y=3;
                    window.location.href = "php_includes/update_status.php?id=" + x + "&status=" + y;
                    

                    //document.getElementByid('comp_id') = x;
                  });
                  </script>
<!-- #invalidating session -->	
	<?php 
		$_SESSION["onsite_message"]=''; 
	?>
	<!-- /#invalidating session -->
</body>

</html>
