<!DOCTYPE html>
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
                            New Complaints
							
				<button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#newComplaint">
  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Complaint
</button>

                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
							<li>
                                <i class="fa fa-fw fa-arrows-v"></i>  <a href="#">Complaints</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> New Complaints
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

					
				 
                        <div class="table-responsive col-lg-12">
                            <table id="ComplaintTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Product</th>
										<th>Description</th>
										<th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Henna</td>
                                        <td>hena.watson@gmail.com</td>
                                        <td>7411723243</td>
										<td>Laptop</td>
                                        <td>System very slow</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
                                    <tr>
                                        <td>Noureen</td>
                                        <td>noreen.rafeeque@gmail.com</td>
                                        <td>8547546521</td>
										<td>Laptop</td>
                                        <td>Keyboard not working</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
                                    <tr>
                                        <td>/sales.html</td>
                                        <td>665</td>
										<td>32.3%</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
                                    <tr>
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                        <td>89.3%</td>
										<td>32.3%</td>
                                        <td>jfjcjg hgchgchfgc hgfcccl;kjlkjl
										;kjlklkjdfgldkgfjh;ldfgkhnccccccccccccccccc
										gdfhfghdfghcccccccccccccccccfgdhfghccccccccccccccccc
										dfghdfgjhdfjfdhgj
										dfjdfhjfhdjgh dfhjdfg;lkj;ndfgjnk;fdljkn;dgf
										sdfkjghsdkfjghbsdf;ljkgdfkjgb
										dccccccccccccccccc </td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
                                    <tr>
                                        <td>/404.html</td>
                                        <td>23</td>
										<td>32.3%</td>
                                        <td>34.3%</td>
                                        <td>$23.52</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
                                    <tr>
                                        <td>/services.html</td>
                                        <td>421</td>
                                        <td>60.3%</td>
										<td>32.3%</td>
                                        <td>$724.32</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
                                    <tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
										<td>32.3%</td>
                                        <td>$126.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
									<tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
										<td>32.3%</td>
                                        <td>$126.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
									<tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
										<td>32.3%</td>
                                        <td>$126.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
									<tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
										<td>32.3%</td>
                                        <td>$126.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
									<tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
										<td>32.3%</td>
                                        <td>$126.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
									<tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
										<td>32.3%</td>
                                        <td>$126.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
									<tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
										<td>32.3%</td>
                                        <td>$126.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
									<tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
										<td>32.3%</td>
                                        <td>$126.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
									<tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
										<td>32.3%</td>
                                        <td>$126.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
									<tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
										<td>32.3%</td>
                                        <td>$126.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
									<tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
										<td>32.3%</td>
                                        <td>$126.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
									<tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
										<td>32.3%</td>
                                        <td>$126.34</td>
										<td><button type="button" class="btn btn-default ">
  <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Assign
</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        
                    
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

	
	
	
	
	<div class="modal fade" id="newComplaint" tabindex="-1" role="dialog" aria-labelledby="newComplaintLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="newComplaintLabel">New Complaint</h4>
      </div>
      <div class="modal-body">
        
                   
                	<div class="form-group">
        	        	<input type="text" placeholder="Name" class="form-control">
                	</div>          
                
              
                  <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                  </div>
                
                
              
                  <div class="form-group">
                    <input type="text" placeholder="Phone Number" class="form-control">
                  </div>
               
    
                <div class="form-group">
                	<select class="form-control">
					<option value="">Select Product</option>
  <option>Laptop</option>
  <option>Desktop</option>

</select>       </div>
               
				
                  <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="How we help you ?"></textarea>
                  </div>
               
              
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
	
	
	
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

	
	
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript" 
src="js/datatables/jquery.dataTables.min.js"></script>

<script type="text/javascript" 
src="js/datatables/dataTables.bootstrap.js"></script>

<script>
	
	$(function() {
    $('#ComplaintTable').dataTable();
} );
	</script>
</body>

</html>
