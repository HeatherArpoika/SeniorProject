<?php session_start();
	//$_SESSION = array();
	//session_destroy();
	//if (!isset($_SESSION['logged'])) header( 'Location: login.php' );
?>
<?php include 'head.php'; ?>
<body>
<?php include("nav.php"); ?>
	<?php
		$id = $_GET['user'];

		echo("SESSION ID: "+$_SESSION['id']);
		echo("ID: "+$id);
		if ($id == 0) $id = $_SESSION['id'];
		echo("ID: "+$id);
		$result = mysqli_query($con,"SELECT email, name FROM users WHERE `id` = ".$id.";");
		$row = mysqli_fetch_array($result);
		$email = $row['email'];
		$name = $row['name'];
	?>
	<div class="column-group horizontal-gutters top-space">
		<div class="all-50 push-left">
	    	<?php $hash = md5(strtolower(trim($email))); ?>
	    	<img src='http://www.gravatar.com/avatar/<? echo $hash ?>?s=270'>
	    </div>
	    <div class="all-50 push-right align-right">
	    	<b><?php echo $name ?></b><br>
	    	<?php echo $email ?><br>
	    </div>
	</div>
	<div class="column-group horizontal-gutters top-space">
		<div class="all-100 horizontal-gutters top-space">
		    <table class="ink-table hover">
			<thead><tr>
				<th class="align-left">Meal</th>
			    <th class="align-left">Monday</th>
			    <th class="align-left">Tuesday</th>
			    <th class="align-left">Wednesday</th>
			    <th class="align-left">Thursday</th>
			    <th class="align-left">Friday</th>
			</tr></thead>
			<tbody>
			<tr>
				<td>Breakfast</td>
		  		<td>Pancakes</td>
		  		<td>Omelets</td>
		  		<td>Sausage</td>
		  		<td>French Toast</td>
		  		<td>Cheesey Scrambled Eggs</td>
			</tr>
			<tr>
				<td>Lunch</td>
		  		<td>Cheesy Potatoes</td>
		  		<td>Mac &amp; Cheese</td>
		  		<td>Cheeseburgers</td>
		  		<td>Grilled Cheese Sandwicheeses</td>
		  		<td>Cheesy Bacon Fries</td>
			</tr>
			<tr>
				<td>Dinner</td>
		  		<td>Sesame Chicken</td>
		  		<td>French Dip Sandwiches</td>
		  		<td>Cheddar Chicken</td>
		  		<td></td>
		  		<td></td>
			</tr>
			</tbody>
			</table>
	    </div>
	</div>
</div>
<?php include 'jsincludes.php'; ?>
</body>