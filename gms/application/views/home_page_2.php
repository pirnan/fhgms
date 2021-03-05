<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="slick/slick.css"/>    
    <link rel="stylesheet" href="slick/slick-theme.css"/>    
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/templatemo-dream-pulse.css" />
	<style>
		.home_page_2_content_div
		{
			background-color: #505055;
			padding: 0px 0px 0px 0px;
		}

		.welcome_text
		{
			padding:10px;
			text-align: center;
		}

		.slider
		{
			height:400px;
			background: #101010;
			text-align: center;

		}
		.paniks_products
		{
			padding:50px;
		}
		.product_img
		{
			height: 300px;
			width: 500px;
			border:1px solid white;
		}
		.next_btn
		{
			border:1px solid black;
			width:30px;
			border-radius: 50%;
			color:black;
			background: transparent;
		}
		.right
		{
			position:absolute;
			left: 870px;
			bottom:250px;
		}
		.left
		{
			position:absolute;
			right: 870px;
			bottom:250px;
		}

		.none_display
		{
			display: none;
			transition: all 3s ease-in-out;
		}
	</style>


</head>
<body>
	<div class="home_page_2_content_div">
		<h1 class="welcome_text">WELCOME TO FITNESS AND HEALTH GYM!</h1>
		<div class="slider">
		<div id="slider_div_id_1" class="paniks_products">
			<img  class="product_img" src="../../img/gym_photo_1.jpg">
			<div class="right"><button class="next_btn" onclick="next_category_clicked(slider_1,slider_2)">>></button></div>
			<div class="left"><button class="next_btn" onclick="next_category_clicked(slider_1,slider_5)"><<</button></div>
		</div>

		<div id="slider_div_id_2" class="paniks_products none_display" >
			<img class="product_img" src="../../img/gym_photo_2.jpg">
			<div class="right"><button class="next_btn" onclick="next_category_clicked(slider_2,slider_3)">>></button></div>
			<div class="left"><button class="next_btn" onclick="next_category_clicked(slider_2,slider_1)"><<</button></div>
		</div>

		<div id="slider_div_id_3" class="paniks_products none_display" >
			<img class="product_img" src="../../img/gym_photo_3.jpg">
			<div class="right"><button class="next_btn" onclick="next_category_clicked(slider_3,slider_4)">>></button></div>
			<div class="left"><button class="next_btn" onclick="next_category_clicked(slider_3,slider_2)"><<</button></div>
		</div>

		<div id="slider_div_id_4" class="paniks_products none_display" >
			<img class="product_img" src="../../img/gym_photo_4.jpg">
			<div class="right"><button class="next_btn" onclick="next_category_clicked(slider_4,slider_5)">>></button></div>
			<div class="left"><button class="next_btn" onclick="next_category_clicked(slider_4,slider_3)"><<</button></div>
		</div>

		<div id="slider_div_id_5" class="paniks_products none_display" >
			<img class="product_img" src="../../img/gym_photo_5.jpg">
			<div class="right"><button class="next_btn" onclick="next_category_clicked(slider_5,slider_1)">>></button></div>
			<div class="left"><button class="next_btn" onclick="next_category_clicked(slider_5,slider_4)"><<</button></div>
		</div>
	</div>

	</div>

	<script>
		const slider_1 = document.getElementById("slider_div_id_1");
		const slider_2 = document.getElementById("slider_div_id_2");
		const slider_3 = document.getElementById("slider_div_id_3");
		const slider_4 = document.getElementById("slider_div_id_4");
		const slider_5 = document.getElementById("slider_div_id_5");

		
		function next_category_clicked(current_div,next_div)
		{
			current_div.classList.add("none_display");
			next_div.classList.remove("none_display");		
		}
	</script>
</body>
</html>