<!DOCTYPE html>
<html>
<style>
	body {
      background-image: linear-gradient(to right, rgba(69,69,69,0), rgba(69,69,69,1));
       background-size:cover;
      font-family: 'Ubuntu', sans-serif;
    }
    .title {
    	margin-top:-8%;
    }
    .box1 {
    	position:fixed;
	  background-color: rgba(0, 0, 0, 0.2);
	  width: 300px;
	  height: 400px;
	  border-radius: 30px;
	  line-height: 30px;
	  color: white;
	  margin: 0 auto;
	  margin-top:4%;
	  margin-left:8%;
	}
	.box2 {
		position:fixed;
	  background-color: rgba(0, 0, 0, 0.2);
	  width: 300px;
	  height: 400px;
	  border-radius: 30px;
	  line-height: 30px;
	  color: white;
	  margin: 0 auto;
	  margin-top:4%;
	  margin-left:38%;
	}
	.box3 {
		position:fixed;
	  background-color: rgba(0, 0, 0, 0.2);
	  width: 300px;
	  height: 400px;
	  border-radius: 30px;
	  line-height: 30px;
	  color: white;
	  margin: 0 auto;
	  margin-top:4%;
	  margin-left:68%;
	}
	.titlebox1{
		background-color: green;
		width: 190px;
		height: 30px;
	  	margin-left:17.5%;
	  	margin-top:-10%;
	}
	.titlebox2{
		background-color: green;
		width: 190px;
		height: 30px;
	  	margin-left:17.5%;
	  	margin-top:-10%;
	}
	.titlebox3{
		background-color: green;
		width: 190px;
		height: 30px;
	  	margin-left:17.5%;
	  	margin-top:-10%;
	}
	h1 {
		font-family: monospace;
		font-size:50px;
		font-style: italic;
		color:black;
		text-align: center;
		margin-top:-10%;
	}
	#monthly{
		margin-top:-10%;
	}
	#price{
		margin-top:-8%;
	}
	#coach{
		margin-top:-10%;
	}
	#pricecoach{
		margin-top:-10%;
	}
	h3 {
		font-family: sans-serif;
		font-size:15px;
		text-align: center;
	}
	h4 {
		font-family: monospace;
		font-size:40px;
		font-style: italic;
		margin: 10px auto;
		color:black;
		text-align: center;
	}
	h5 {
		font-family: sans-serif;
		font-size:20px;
		font-style: italic;
		color:black;
		font-weight: lighter;
		margin-top:17%;
		margin-left:11%;
	}
	#logo {
	    transition: transform .2s;
	}
	#logo:hover {
	    transform: scale(1.3);
	} 
	ul {
		background-image: url("../../img/bullet.png");
		background-repeat: no-repeat;
		background-size: 30px;
		margin-left:8%;
		margin-top:13%;
	}
	li{
   		margin-left: 5%;
		list-style: none;
		color:black;
		font-family: courier;
		font-size:20px;
		text-align:inherit;
	}
	#signupbutton{
		margin: auto;
		margin-left: 20%;
		margin-top: -8%;
		transition: transform .2s;
	}
	#signupbutton:hover{
		transform: scale(1.3);
	}
	#signupbutton2{
		margin: auto;
		margin-left: 20%;
		margin-top: -10.5%;
		transition: transform .2s;
	}
	#signupbutton2:hover{
		transform: scale(1.3);
	}

</style>
<head>
	<title>Membership</title>
</head>
<body>
 <a href="index"><img id="logo" src="../../img/gym5.png" height="150" width="156" style="margin-left:2%;margin-top:1%;"/></a>
	<div class="title" align="center">
		<h2>What's Your Plan?</h2>
	</div>
	<div class="box1">
		<div class="titlebox1">
			<h3>Gym Membership</h3>
		</div>
		<h4>DAILY</h4>
		<hr size="5">
		<ul>
			<li>Access to all Gym Equipments</li>
		</ul>
		<ul>
			<li>Access to free water</li>
		</ul>
		<h5>Price:</h5>
		<h1>PHP 80</h1>
		<a href="../EmailController/index?id=1"><img id="signupbutton" src="../../img/signup.png" height="60" width="170"/></a>
	</div>
	<div class="box2">
		<div class="titlebox2">
			<h3>Gym Membership</h3>
		</div>
		<h4>WEEKLY</h4>
		<hr size="5">
		<ul>
			<li>Access to all Gym Equipments</li>
		</ul>
		<ul>
			<li>Access to free water</li>
		</ul>
		<h5>Price:</h5>
		<h1>PHP 240</h1>
		<a href="../EmailController/index?id=2"><img id="signupbutton" src="../../img/signup.png" height="60" width="170"/></a>
	</div>
	<div class="box3">
		<div class="titlebox3">
			<h3>Gym Membership</h3>
		</div>
		<h4>MONTHLY</h4>
		<hr size="5">
		<ul>
			<li>Access to all Gym Equipments</li>
		</ul>
		<ul>
			<li>Access to free water</li>
		</ul>
		<h5 id="price">Price:</h5>
		<h1 id="monthly">PHP 750</h1>
		<h5 id="pricecoach">With Coach:</h5>
		<h1 id="coach">PHP 3,500</h1>
		<a href="../EmailController/index?id=3"><img id="signupbutton2" src="../../img/signup.png" height="60" width="170"/></a>
	</div>
</body>
</html>