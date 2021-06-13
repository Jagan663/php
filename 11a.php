
<?php

$string1 = $_POST['name'];//"123,46,78,000";
$str_arr1 = explode (",", $string1); 
$string2 =$_POST['price'];
$str_arr2 =explode(",", $string2);
$c = array_combine($str_arr1, $str_arr2);
$min = '';
$max = '';
$min_val=null;
$max_val=null;
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
		  width: 15.33%;
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
	  <div class="column" style="background-color:#aaa;">
	    <h3>Item Name</h3><hr>
	    <?php
	    foreach($c as $x => $val) {
			  echo '<p class="bb">'.$x.'</p><br>';
			}
	    ?>
	  </div>
	  <div class="column" style="background-color:#bbb;">
	    <h3>Item Cost</h3><hr>
	    <?php
	    foreach($c as $x => $val) {
	    	
	    	

			 
			  echo '<p class="bb">'.$val.'</p><br>';
			  if ($val <= $min_val || $min_val == null) {
			  	if($val == $min_val){
			  		$min = $x.','.$min;
			  	}else{
				    $min = $x;
				    $min_val=$val;
			  	}
			  }
			  if ($val >= $max_val || $max_val == null) {
			  	if ($val == $max_val) {
			  		$max = $x.','.$max;
			  	}else{
			  		$max = $x;
			    	$max_val=$val;
			  	}
			  }
			}
	    ?>
	  </div>
	  
	</div>
	<div class="mb-2">
		<label>Costliest Item is :<?php echo $max; ?></label><br>
		<label>Cheapest Item is :<?php echo $min; ?></label>
	</div>
</body>
</html>