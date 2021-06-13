
<?php
date_default_timezone_set('Asia/Calcutta');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.mb-2 {
			margin-bottom: 10px;
		}

		.column {
		  float: left;
		  width: 35.33%;
		  padding: 10px;
		  height: auto; /* Should be removed. Only for demonstration */
		}

		.form-control {
			width: 50%;
		}

		.bb {
			border-bottom: 1px solid black;
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

		table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th,td{
	padding: 15px;
}
		/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
	</style>
</head>
<body>

	<h1>A-MART Stationery Pvt.ltd</h1><br><br>
	<table>
		<caption>A-MART Reciept/Bill</caption>
		<tr>
			<th>Item Name</th>
			<th>Item code</th>
			<th>Item Price</th>
			<th>Quantity</th>
			<th>Date of Purchase</th>
			<th>Total Amount</th>
		</tr>
		<tr>
			<td><?php echo $_POST['iname']; ?></td>
			<td><?php echo $_POST['icode']; ?></td>
			<td><?php echo $_POST['price']; ?></td>
			<td><?php echo $_POST['qty']; ?></td>
			<td><?php echo date('l jS \of F Y'); ?></td>
			<td><?php echo number_format($_POST['price']*$_POST['qty'],2); ?></td>
		</tr>
	</table>
	  <br>
	  <label>Thank You for Shopping with A-MART</label>
	  <br>
	  <br>
	  <form action="12.php">
	  	<input type="submit" name="" value="Continue Shopping">
	  </form>
</body>
</html>