<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Fitness and Health Gym Management System</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="slick/slick.css"/>    
    <link rel="stylesheet" href="slick/slick-theme.css"/>    
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/templatemo-dream-pulse.css" />
	<style>
		
		*{
			padding:0;
			margin:0;
			box-sizing:border-box;
		}
		.header_logo
		{
			position: relative;
			left:-350px;
			/*padding-top: 20px;*/
			margin-top: 20px;
			background: gold;
			border-radius: 50px;
		}

		.header_div
		{
			background-color: #101010;
			text-align: right;
		}
		.header_contents
		{
			text-decoration: none;
			font-size: 25px;
			color: white;
		}
		.header_li
		{

			display:inline-block;
			padding:20px;
			font-size: 20px;
			position: relative;
			bottom: 40px;


		}
		.header_li:hover
		{
			transition: all 1.3s ease ;
			background-color: gold;
			color:black;
			border-radius: 40px;
  			
		}

		.membership_content_container
		{
			display: none;
			text-align: center;
			
		}

		

		.membership_li:hover  .membership_content_container
		{
  			
			display: block;
			position: absolute;
			left:20px;
			top:50px;
			/*background-color: gold;*/
			/*border-radius: 50px;*/
  			animation: fade_in_show 1.0s

		}

		@keyframes fade_in_show {
    	 	0% {
          	opacity: 0;
          	transform: scale(0)
    	 	}

    	 	100% {
         	 opacity: 1;
         	 transform: scale(1)
    	 	}
		}

		a 
		{
			color: white;
			text-decoration: none;
		}
		 .membership_content_item_hoverables:hover
		{
			background-color: black;
			color: gold;
			border-radius: 40px;
			transition: all ease 0.3s;
		}

		.membership_content_items
		{
			background: gold;
			color:black;
			border-radius: 40px;
			padding-left: 10px;
			padding-right: 10px;

			
		}
		input[type="submit"]{
			background: none;
			color: inherit;
			border: none;
			padding: 0;
			font: inherit;
			cursor: pointer;
			outline: inherit;
		}

	</style>

</head>
<body>
	<div class="header_div">
		<div class="header_contents">
			<ul class="header_content_ul">
				<a href="<?php echo site_url('/'); ?>"><img class="header_logo" src="../../img/gym_logo_100x100.png"></a>
				<li class="header_li"><a style="text-decoration: none;" href="<?php echo site_url('main/index'); ?>">HOME</a></li>
				
					<li class="header_li membership_li">MEMBERSHIP
					<div class="membership_content_container">
						<a href="<?php echo site_url('main/membership_page_call'); ?>" class="membership_content_item_hoverables membership_content_items">add member</a><br>
						<a href="<?php echo site_url('main/view_members_call'); ?>" class="membership_content_item_hoverables membership_content_items" >view members</a>
					</div>
				</li>	
			
				
				<li class="header_li membership_li" > EQUIPMENT & FACILITIES
					<div class="membership_content_container">
						<a href="<?php echo site_url('main/equipment_call'); ?>"  class="membership_content_item_hoverables membership_content_items">Add equip</a>
						<a href="<?php echo site_url('main/view_equip_call'); ?>"  class="membership_content_item_hoverables membership_content_items">view equip</a>

					</div>
				</li>
				<li class="header_li"><a href="aboutus_call" style="text-decoration: none;">ABOUT US</a></li>
				<li class="header_li"><form method="post"><input type="submit" name="signout" value="LOG OUT"></form></li>
				
			</ul>
		</div>
	</div>
</body>
</html>