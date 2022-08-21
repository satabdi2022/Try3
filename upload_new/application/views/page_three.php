<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<center>
<body>
	<?php foreach($all_user as $key => $row) 
	{
    ?>
    <br><br><br><br><br>
    <label> BUS NAME :-<font color="blue"> <?php echo $row['bus_name']?> </font></label>
<br> <br>
<label> NUMBER PLATE :-<font color="blue"> <?php echo $row['number_plate']?> </font></label>
<br> <br>
<label > LISENCE :-<font color="blue"> <?php echo $row['lisence']?> </font></label>
<br> <br>
<label> DRIVER NAME :-<font color="blue"> <?php echo $row['driver_name']?> </font></label>
<br> <br>
<label> COST :-<font color="blue"> <?php echo $row['cost']?> </font></label>
<?php
}
?>
</body>
</center>
</html>