
<?php
$slno = '';
$iname='';
$icode='';
$price='';
$qty='';

$s1=array('Pencil',10,'p01');
$s2=array('Pen',20,'p02');
$s3=array('Eraser',5,'p03');
$s4=array('Note Book',40,'p04');
if (isset($_POST['ids'])) {
	$slno=$_POST['ids'];
	$arrays = ${"s$slno"};
	$iname=$arrays[0];
	$icode=$arrays[2];
	$price=$arrays[1];
	unset($_POST['ids']);
}
// $string1 = $_POST['name'];//"123,46,78,000";
// $str_arr1 = explode (",", $string1); 
// $string2 =$_POST['price'];
// $str_arr2 =explode(",", $string2);
// $c = array_combine($str_arr1, $str_arr2);
// $min = '';
// $max = '';
// $min_val=null;
// $max_val=null;
// max($string2);
// min($string2);
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
		/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
	</style>
</head>
<body>

	<div class="row">
	  <div class="column" style="background-color:#b6e624;text-align: center;">
	    <h3>Item Name</h3>
		<p>Welcome to A-MART online shopping</p>
	  </div>
	</div>
	<div class="row" style="margin-left: 25px;">
	  <div class="column" >
	  	<h3>Please Select Your Item :</h3>
	  	<br>
	  	<form action="#" method="post">
	  		<select onchange="this.form.submit()" name="ids" class="form-control">
	  		<option>select</option>
	  		<option value="1" >Pencil</option>
	  		<option value="2" >Pen</option>
	  		<option value="3" >Eraser</option>
	  		<option value="4" >Notebook</option>
	  	</select>
	  	</form>
	  	<br>
	  	<form action="12a.php" method="post">
	  		<table>
	  			<tr>
	  				<th>Description</th>
	  				<th>Value</th>
	  			</tr>
	  			<tr>
	  				<td>Sl.No</td>
	  				<td><input type="text" name="slno" value="<?php echo $slno; ?>"></td>
	  			</tr>
	  			<tr>
	  				<td>Item Name</td>
	  				<td><input type="text" name="iname" value="<?php echo $iname; ?>"></td>
	  			</tr>
	  			<tr>
	  				<td>Item Price</td>
	  				<td><input type="text" name="price" value="<?php echo $price; ?>"></td>
	  			</tr>
	  			<tr>
	  				<td>Item Code</td>
	  				<td><input type="text" name="icode" value="<?php echo $icode; ?>"></td>
	  			</tr>
	  			
	  			<tr>
	  				<td>Qty</td>
	  				<td><input type="text" name="qty" value="1"></td>
	  			</tr>
	  		</table>
	  		<br>
	  		<input type="submit" name="bill" value="bill">
	  	</form>
	  </div>
	  
</body>
</html>