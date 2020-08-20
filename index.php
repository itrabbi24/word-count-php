<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Auto Count Words Using PHP</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-8">
			<form method="POST" action="">
				<label>Enter a String</label>
				<div class="form-group">
					<textarea class="form-control" required="required" style="resize:none; height:100px;" name="words"></textarea>
				</div>
				<button class="btn btn-primary" name="count">Count</button>
			</form>
			
			<?php include'function.php'?>
		</div>
	</div>
</body>
</html>