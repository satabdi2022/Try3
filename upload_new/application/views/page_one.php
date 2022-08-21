	<html>
	<head>
	</head>
			<style type="text/css">
				body{
				mergin: 0px;
				padding: 0px;
			}
			
			.bn{
				background-color: cyan;
				color: red;
				size: 25px;
			}
			.l1{
				background-color: black;
				width: 600px;
				margin-left: 500px;
				margin-top: 100px;
				height: 350px;
				box-sizing: border-box;
				border-radius: 20px;
			}
			.l2{
				margin-top:3%;
				background-color: yellowgreen;
				height:280px ;
				width: 500px;
				margin-left: 50px;
				box-sizing: border-box;
				border-radius: 20px;
			}
			
			</style>
			<body bgcolor="pink">
				<div class="l1">
					<br>

				<div class="l2">
				<form method="post" action="<?php echo base_url()?>Welcome/new_upload">
		<center>

	<label > BUS NAME </label>
	<input type="text" name="bname" id="bname" class="bn">
	<br> <br>
	<label> NUMBER PLATE  </label>
	<input type="text" name="noplate">
	<br> <br>
	<label > LISENCE </label>
	<input type="text" name="lisence">
	<br> <br>
	<label> DRIVER NAME </label>
	<input type="text" name="name">
	<br> <br>
	<label> COST </label>
	<input type="text" name="cost">
	<br> <br>
	<input type="submit">
	<br><br>
	<a href="<?php echo base_url()?>Welcome/show_bus"> SHOW </a>
	</center>
	</form>
	</div>
	</div>
	</body>

	</html>