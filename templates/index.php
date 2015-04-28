<!DOCTYPE html>
<html>
<head>
    <title>GoogleSearch</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	
</head>
<body>
<div class="content">
	<div class="form">
		<form action="index.php" method="get">
		<div class="row">
		  <div class="col-lg-6">
			<div class="input-group">
			  <input type="text" class="form-control" placeholder="Search for..." name="search">
			  <span class="input-group-btn">
				<input class="btn btn-default" type="submit" name="run" value="Search">
			  </span>
			</div>
		  </div>
		</div>
		</form>
	</div>
	
	<hr />
	
	<div class="rezult">
		<?=$rezult;?>
	</div>
</div>

</body>

</html>

