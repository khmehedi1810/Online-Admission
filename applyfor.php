<!DOCTYPE html>
<html>
<head>
	<title>Admission - Ramharipur Ramakrishna Mission Ashrama</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <style type="text/css">
    	header{
    		height: 60px;
    		background-color: #fff;
    		padding: 20px;
    	}
    	.sec{
    		height: 100vh;
    		background-color: #778899;
    	}
    	.content{
    		height: 60%;
    		display: flex;
    		justify-content: center;
    		align-items: center;
    	}
    	.custom-control-label{
    		font-weight: bold;
    	}
    </style>
</head>
<body>

	<header class="shadow p-3 mb-3 bg-white">
		<a href="index.php" class="btn btn-secondary mb-3">Home</a>
	</header>

	<section class="sec">
		<div class="content">
			<div class="card w-50 shadow">
			  <div class="card-header">
			  	<center><h2>Choose Application Type</h2></center>
			  </div>
			  <div class="card-body">
			  	<center>
			  	
			  	  <form action="admit.php" method="post" class="p-5">
				    <div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" required="" id="c1" value="1" name="applyfor" class="custom-control-input">
					  <label class="custom-control-label" for="c1">Hostel & Outsider</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" required="" id="c2" value="2" name="applyfor" class="custom-control-input">
					  <label class="custom-control-label" for="c2">Local</label>
					</div>
					<div class="pt-3">
						<input type="submit" name="aplyfor" class="btn btn-primary" value="Next">
					</div>
				  </form>
				</center>
			  </div>
			</div>
		</div>


	</section>

</body>
</html>