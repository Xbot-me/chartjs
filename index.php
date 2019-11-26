<?php
session_start();

if(!isset($_SESSION['email'])){
	header("Location:account.php"); 
}

?>


<!DOCTYPE html>

<html>

<head>

	<title>Data Chart</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.js"></script>

	<script type="text/javascript" src="js/bootstrap4.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

 <script type="text/javascript" src="js/item-ajax.js"></script>

</head>

<body>

	<br>
	<br>
	<div class="container">

		<div class="data">

		    <div class="col-lg-12 margin-tb">					

		        <div class="text-center">

		            <h2>All The Student Data</h2>
								<hr>

		        </div>

		      <div class="pull-right">
						<a style="color:#fff" href="charts.php"><button type="button" class="btn btn-success btn-lg">View Charts</button></a>

						<a style="color:#fff" href="updata.php"><button type="button" class="btn btn-success btn-lg">Upload Data</button></a>

						<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#create-item">Create Item</button>
						<a style="color:#fff" href="api/logout.php"><button type="button" class="btn btn-danger btn-lg float-right">Log Out</button></a>

		        </div>

		    </div>

		</div>
		<hr>


		<table class="table table-bordered">

			<thead>

			    <tr>

						

						<th>school</th>

						<th>Department</th>

						<th>Year</th>

						<th>Semester</th>

						<th>Major</th>

						<th>Students</th>
						
						<th>Actions</th>
				
					</tr>
				
			</thead>

			<tbody>

			</tbody>

		</table>


		<ul id="pagination" class="pagination-sm"></ul>


	        <!-- Create Item Modal -->

		<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

		  <div class="modal-dialog modal-lg" role="document">

		    <div class="modal-content">

		      <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Create Item</h4>

		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

		        

		      </div>


		      <div class="modal-body">

		      <form id="wtf" data-toggle="validator" action="api/create.php" method="POST">



						<div class="form-group">
							<label class="control-label" for="title">School:</label>
							<input class="form-control" required type="text" name="school" id="">
						</div>
						<div class="form-group">
							<label class="control-label" for="title">Department:</label>
							<input class="form-control" step=".01" required  type="text" name="department" id="">

						</div>
						<div class="form-group">
							<label class="control-label" for="title">Year:</label>
							<input class="form-control" step=".01" required  type="number" name="year" id="">

						</div>
						<div class="form-group">
							<label class="control-label" for="title">Semester:</label>
							<input class="form-control" step=".01" required type="text" name="semester" id="">

						</div>
						<div class="form-group">
							<label class="control-label" for="title">Major:</label>
							<input class="form-control" step=".01" required type="text" name="major" id="">

						</div>
						<div class="form-group">
							<label class="control-label" for="title">Students:</label>
							<input class="form-control" step=".01" required type="number" name="student" id="">

						</div>
						


						<div class="form-group">

							<button class="btn crud-submit btn-success">Submit</button>

						</div>


		      		</form>


		      </div>

		    </div>


		  </div>

		</div>


		<!-- Edit Item Modal -->

		<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

		  <div class="modal-dialog" role="document">

		    <div class="modal-content">

		      <div class="modal-header">

		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

		        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>

		      </div>


		      <div class="modal-body">

		      		<form data-toggle="validator" action="api/update.php" method="put">

		      			<input type="hidden" name="id" class="edit-id">


		      			<div class="form-group">

							<label class="control-label" for="title">Title:</label>

							<input type="text" name="title" class="form-control" data-error="Please enter title." required />

							<div class="help-block with-errors"></div>

						</div>


						<div class="form-group">

							<label class="control-label" for="title">Description:</label>

							<textarea name="description" class="form-control" data-error="Please enter description." required></textarea>

							<div class="help-block with-errors"></div>

						</div>


						<div class="form-group">

							<button type="submit" class="btn btn-success crud-submit-edit">Submit</button>

						</div>


		      		</form>


		      </div>

		    </div>

		  </div>

		</div>


	</div>


</body>

</html>