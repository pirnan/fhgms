<!DOCTYPE html>
<html>
<head>
	<title>equipments</title>
	<style>
		.equip_card
		{
			height: 200px;
			width: 240px;
			background-color: #151515;
			margin:10px;
			float: left;
			padding:10px;
			border-radius: 20px;
			color:#151515;
		}

		.labels_div
		{
			
		}

		.page_title_div
		{
			margin-right: 50px;
			padding: 20px;
		}

		.page_title
		{
			text-transform: capitalize;
			font-size: 50px;

		}

		.name_description
		{
			text-align: center;
			width: 220px;
			background-color: gold;
			display: flex;
			margin: auto;

		}

		.img_div
		{
			margin-top:10px;
			margin-left:25%;
		}

		.img_class
		{
			width: 120px;
			height: 100px;

		}
	</style>
</head>
<body>
	<div>
		<div class="view_equip_div">
			<div class="page_title_div">
				<h1 class="page_title">equipments</h1>
			</div>
			<?php foreach ($e->result() as $value) 
				// $file_name = $value->equip_img;
        	{ 
        		
        		?>
        		<div class="equip_card">
        			
					
		        	<!-- <li><?php echo $value->equip_id ?></li> -->
		        	<div class="labels_div">
		        		<label class="name_description"><?php echo $value->equip_name ?></label>
		        		<label class="name_description"><?php echo $value->equip_description ?></label>
		        	</div>
		        	

		        	<div class="img_div">
		        		<?php echo"<img class='img_class' src='../../uploads/".$value->equip_img."'>" ?>
		        	</div>
		        	

					
        		</div>
					
			<?php 
			} ?>
			
</div>
	</div>
</body>
</html>