<!doctype html>
<html>
 <head>
  <title>How to upload file/image in CodeIgniter 3</title>
  <style>
  	.equip_ul
  	{
  		background-color: blue;
  		width: 200px;
  	}

  	.equip_add_div
  	{
  		height:400px;
  		width: 500px;
  		background-color: #101010;
  		margin:auto;
  		margin-top: 50px;
  		padding:10px;
  	}

  	.equip_add_inner_div
  	{
  		height:380px;
  		width: 480px;
  		background-color:  #c3e4fd;
  		padding: 20px;

  	}

  	.labels_div
  	{
  		
  	}

  	.upload_div
  	{
  		position: relative;
  		top: 220px;
  		left: 45%;
  	}

  	.inputs_div
  	{
  		position: relative;
  		left: 240px;
  		bottom: 60px;
  	}

  	.upload_btn
  	{
  		padding: 10px;
  		background-color: green;
  		border-radius: 40px;
  	}

  </style>
 </head>
 <body>
 <b><?php if(isset($response)) echo $response; ?></b>
	 <form method='post' action='<?php echo site_url('main/equipment_call'); ?>' enctype='multipart/form-data'>
	 	<div class="equip_add_div">
	 		
	 		<div class="equip_add_inner_div">
	 			<div class="labels_div">
		 			<label>Equipment Name: </label><br>
			  		<label>Equipment Description: </label><br>
			  		<input type='file' name='file' ><br>
	 			</div>

	 			<div class="inputs_div">
	 				<input type="text" name="equip_name"><br>
	 				<input type="text" name="equip_description">

	 			</div>
		  		
		  		<div class="upload_div">
	  				<input class="upload_btn" type='submit' value='Upload' name='upload' />
		  		</div>
	 		</div>

	 		
	 	</div>
	  	 
	 </form>
 </body>
</html>