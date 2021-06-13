<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		/* Left column */
		.leftcolumn {   
		  float: left;
		  width: 40%;
		}

		.mb-2 {
			margin-bottom: 10px;
		}

		.form-control {
			width: 50%;
		}

		/* Right column */
		.rightcolumn {
		  float: left;
		  width: 25%;
		  background-color: #f1f1f1;
		  padding-left: 20px;
		}

		/* Add a card effect for articles */
		.card {
		  background-color: white;
		  padding: 20px;
		  margin-top: 20px;
		}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Footer */
		.formheading {
		  padding: 10px;
		  text-align: center;
		  background: #ddd;
		  margin-top: 20px;
		}
		/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 800px) {
		  .leftcolumn, .rightcolumn {   
		    width: 100%;
		    padding: 0;
		  }
		}
	</style>
</head>
<body>

	<form action="11a.php" method="post">
		<div class="row">
	  	<div class="leftcolumn">
		    <div class="card">
		    	<div class="formheading mb-2">Item Store</div>
		    	<div class="row mb-2">
		    		<label>Enter the Item Names : </label>
		    	<input type="text" name="name" class="form-control"><br>
		    	</div>
		    	<div class="row mb-2">
		    		<label>Enter the Item Price  : </label>
		    	<input type="text" name="price" class="form-control"><br>
		    	
		    	</div>
		    	<div class="row">
		    		<input type="submit" name="save" value="store">
		    		<input type="reset" name="" value="reset" style="padding-left: 10px;">
		    	</div>
		    </div>
		</div>
	</div>
	</form>
</body>
</html>