<?php session_start(); 
	//if ($_SESSION['logged'] != 1) header( 'Location: login.php');
?>
<?php include 'head.php'; ?>

<body>
<?php
	include("mysql.php");
	$result = mysqli_query($con,"SELECT * FROM recipes");
?>
<?php include 'nav.php' ?>
<div class="row">
	<div class="small-12 columns">
		<br>
		<h2 class='left'>Recipes</h2>
		<button class='small right radius'>+ Add Recipe</button>
	</div>
</div>
<div class="row">
	<div class="small-8 small-offset-4 columns">
		<div class='row'>
			<div class='small-6 columns text-right'>
				<label class='inline'>Sort By</label>
			</div>
			<div class='small-6 columns right'>
		        <select class="right">
			        <option value="newest">Newest</option>
			        <option value="oldest">Oldest</option>
			        <option value="name">Name</option>
			        <option value="difficulty">Difficulty</option>
		        </select>
		    </div>
		</div>
	</div>
</div>
<div class="row">
	<div class="small-12 columns">
		<table width="100%">
			<thead>
				<tr>
					<th colspan=2>Name</th>
					<th>Difficulty</th>
					<th>Servings</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
			<?php
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td><a class='th [radius]' href='#'><img src='",$row['photos'],"' width='100'></a></td>";
					echo "<td>",$row['name'],"</td>";
					echo "<td>",$row['difficulty'],"</td>";
					echo "<td>",$row['servings'],"</td>";
					echo "<td>",$row['notes'],"</td>";
					echo "</tr>";
				}
			?>
			</tbody>
		</table>
	</div>
</div>
<?php include 'jsincludes.php'; ?>
</body>