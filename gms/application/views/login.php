<!DOCTYPE html>
<html>
<style>
    body {
        background-image: linear-gradient(to right, rgba(69,69,69,0), rgba(69,69,69,1));
        font-family: 'Ubuntu', sans-serif;
    }
    
    .main {
        background-color: #FFFFFF;
        width: 400px;
        height: 450px;
        margin: 7em auto;
        margin-top:-8%;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
        padding-top: 40px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #006400, #90EE90);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);      
    }
    .submit:hover {
  color: #404040 !important;
  font-weight: 700 !important;
  letter-spacing: 1px;
  background: #ccff99;
  -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
  -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
  transition: all 0.3s ease 0s;
}
    #logo {
        transition: transform .2s;
    }
    #logo:hover {
        transform: scale(1.3);
    } 
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        padding-top: 15px;
    }
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        text-decoration: none
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
   

</style>
    <head> 

        <title>Login form</title>
    </head>

    <body>
        <a href="index"><img id="logo" src="../../img/gym5.png" height="150" width="156" style="margin-left:2%;margin-top:1%;"/></a>
      <div class="main">
        <p class="sign" align="center">Sign in</p>
        <?php echo validation_errors('<center><div style="width:150px; background-color: #fce4e4; border: 1px solid #fcc2c3;
  padding: 10px 10px;" >','</div></center>'); ?>
        <form class="form1" method="post">
          <input class="un " name="username" type="text" align="center" placeholder="Username">
          <input class="pass" name="password" type="password" align="center" placeholder="Password">
           <button type="submit" name="savee" class="submit" align="center">Sign in</button>
          <p class="forgot" align="center"><a href="#">Forgot Password?</p>              
    </div>
     
    </body>

 <!--   <body>
    <div class="wrapper">
      <div class="content">
        <a href="index" class="btn btn-danger" role="button" aria-pressed="true">Back</a>
        <div class="limiter">
		    <div class="container-login100">
			    <div class="wrap-login100">
                    <form method="post">
                    <div>
                        <h1 style="font-size:250%;color:white;"><center>Admin Login</center></h1>
                        <h2><center><img src="../../assets/images/profile.jpg" width="100"; ></center></h2>
                    </div>
                    </br>
                    </br>
                    <div class="wrap-input100">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="wrap-input100">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn" name="savee">
                        Login
                        </button>
                    </div>  
                    </form>
                </div>
            </div>
        </div>
        </br> 
      </div>
  </div>
</div>
    </body>
</html>
-->