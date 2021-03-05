<!DOCTYPE html>
<html>
<head>
	<title>Membership!</title>
	<style>


		.membership_div
		{
			

		}

		.add_member_div
		{
			background-color: #101010;
			width: 500px;
			height: 400px;
			padding:10px;
			margin:auto;
			margin-top: 40px;
			/*position: absolute;*/
		}
		.add_member_inner_div
		{
			background-color: #c3e4fd;
			width: 480px;
			height: 380px;
			padding:20px;
		}

		.membership_text_h1
		{
			text-align: center;
			padding: 20px 0px 20px 0px;
		}

		.add_member_h2
		{
			text-align: center;
			padding:20px;
		}

		.labels_div
		{
			/*left blank for future purposes*/
		}

		.inputs_div

		{
			
			width: 143px;
			height: 112px;
			position:relative;
			left:250px;
			bottom:230px;
		}

		.submit_button_div
		{
			position: relative;
			bottom:70px;
			left:180px;

		}

		.submit_button
		{
			padding:10px 30px;
			border-radius: 40px;
			background-color: green;
		}

		.add_member_labels
		{
			padding:20px;
		}

		.add_member_inputs
		{
			margin-left:100px;
		}
	</style>
</head>
<body>
 <b><?php if(isset($response)) echo $response; ?></b>
	<div class="membership_div">
		<!-- <h1 class="membership_text_h1">this is the membership page</h1> -->

		<div class="add_member_div">
			<div class="add_member_inner_div">
				<h2 class="add_member_h2">ADD MEMBER</h2>
				<form method='post' action='<?php echo site_url('main/membership_page_call'); ?>' enctype='multipart/form-data'>

					<!-- labels -->
					<div class="labels_div">
						<label class="add_member_labels">First Name:</label><br>
						<label class="add_member_labels">Last Name:</label><br>
						<label class="add_member_labels">Middle Name:</label><br>
						<label class="add_member_labels">Email address:</label><br>
						<label class="add_member_labels">Contact Number:</label><br>
						<label class="add_member_labels">Address:</label><br><br>

						<label class="add_member_labels">Age:</label><br>
						<label class="add_member_labels">Gender:</label><br>
						<label class="add_member_labels">height:</label><br>
						<label class="add_member_labels">weight:</label><br>
						<label class="add_member_labels">Profile picture:</label><br>
					</div>
					
					<!-- inputs -->

					<div class="inputs_div">
						<input type="text" name="first_name"><br>
						<input type="text" name="last_name"><br>
						<input type="text" name="middle_name"><br>
						<input type="text" name="email_address"><br>
						<input type="text" name="contact_number"><br>
						<input type="text" name="address"><br><br>

						<input type="text" name="age"><br>
						<input type="text" name="gender"><br>
						<input type="text" name="height"><br>
						<input type="text" name="weight"><br>
						<input type='file' name='file'><br>
					</div>

					<div class="submit_button_div">
						<input class="submit_button" type="submit" name='upload' value="ADD">
						
					</div>
					




				</form>
			</div>
		</div>
	</div>
</body>
</html>