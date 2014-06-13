<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Weather</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script>
	$(document).ready(function(){
		$('#me').on('submit',function(){
			$.get(
				$(this).attr('action'),
				$(this).serialize(),
				display,
				'json'
				);

			return false;
		});
	});

	function display(data_r){
		var str = "<h3>Current</h3><h4>Temperature F: "+data_r.data.current_condition[0].temp_F+" </h4><h4>Temperature C: "+data_r.data.current_condition[0].temp_C+"</h4><h4>Conditions: "+data_r.data.current_condition[0].weatherDesc[0].value+"</h4>";
		$('#here').append(str);
	}

	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Weather! <small>What's going on outside?</small></h1>
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<form id="me" role="form" action="http://api.worldweatheronline.com/free/v1/weather.ashx" method="get">
					<div class="form-group">
						<label for="q">Location</label>
						<select name="q">
							<option value="83646">Meridian</option>
							<option value="83616">Eagle</option>
							<option value="83714">Boise</option>
						</select>
					</div>
					<input type="hidden" name="key" value="jtpc4myth9fwxjgwz9fh5fw5">
					<input type="hidden" name="format" value="json">
					<button type="submit" class="btn btn-lg btn-danger">Look Up Weather</button>
				</form>
			</div>
			<div id="here" class="col-md-6">
				
			</div>
		</div>
	</div>
</body>
</html>