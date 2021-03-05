<!DOCTYPE html>
<html>
<head>
	<title>equipment</title>
	<style>

		*{
			padding:0;
			margin:0;
			box-sizing:border-box;
		}
		.equipment_div
		{
			color:black;
		}
		.add_equip_btn
		{
			margin-left:1245px;
			margin-top: 10px;
			padding:10px;
		}
		
		
		.add_equip_div
		{
		width: 500px;
		height: 300px;
		background-color: #121212;
		padding: 10px 10px 10px 10px;
		margin: auto;
		}

		.add_equip_container
		{
			width: 480px;
			height: 280px;
			background-color: #333;
		}

		.labels
		{
			position: relative;
			top: 10px;
			left: 10px;
			background-color: #333;
			width: 150px;
			padding: 10px;
		}

		.inputs
		{
			position: relative;
			top: -60px;
			left: 300px;
			background-color: #333;
			width: 160px;
			height: 70px;
			padding: 5px;
		}

		.submit_div
		{
			position: relative;

		}
		.add_btn
		{
			padding: 10px 30px;
			position: relative;
			background-color: green;
			left: 200px;
		}
	</style>
</head>
<body>

	
	
	<div class="equipment_div">
		<button class="add_equip_btn">add equipment</button>
		<div class="add_equip_div">
			<div class="add_equip_container">
				<form method="post" action="<?=base_url('store-image')?>" enctype="multipart/form-data">
					<div class="labels">
						<label>equipment name</label><br>
						<label>description</label><br>
						<label>image</label><br>
					</div>


					<div class="inputs">
						<input type="text" name="equip_name"><br>
						<input type="text" name="description"><br>
						<input type="file" name="image" size="20"><br>

					</div>


					<div class="submit_div">
						<input class="add_btn" type="submit" name="submit_equip" value="add">
					</div>
				</form>
			</div>
			
		</div>


	</div>
</body>
</html>