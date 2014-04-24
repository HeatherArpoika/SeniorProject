<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="ink/dist/css/ink.css">
</head>

<body>
<?php include("nav.php"); ?>
	<div class="row">
		<div class='columns small-10 small-offset-1 medium-6 medium-offset-3'>
			<form method="post" action="adding.php">
					<label for="name">Name</label><br>
    	        	<input name="name" type="text"><br>
        	    	<div class="column-group gutters">
			        <div class="control-group all-50">
			            <label for="i-a-1">Amount</label>
			        </div>
			        <div class="control-group all-50">
			            <label for="i-n-1">Ingredients</label>
			        </div>
			    </div>
            	<div class="column-group gutters">
			        <div class="control-group all-50">
			            <div class="control">
			                <input type="text" id="i-a-1">
			            </div>
			        </div>
			        <div class="control-group all-50">
			            <div class="control">
			                <input type="text" id="i-n-1">
			            </div>
			        </div>
			    </div>
        		<input id="submit" type="submit" value="Submit">
			</div>
		</form>
	</div>
</div>
</body>