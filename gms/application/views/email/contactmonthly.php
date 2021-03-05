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
        height: 1050px;
        margin: 7em auto;
        margin-top:-8%;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    form.form1 {
        padding-top: 40px;
    }
    .sign {
        padding-top: 40px;
        color: darkred;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    input {
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
    #logo {
        transition: transform .2s;
    }
    #logo:hover {
        transform: scale(1.3);
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
</style>
    <head>
        <title>Monthly Membership</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
            <a href="../main/index"><img id="logo" src="../../img/gym5.png" height="150" width="156" style="margin-left:2%;margin-top:1%;"/></a>
        <div class="main">
            <p class="sign" align="center">Fill-up</p>
            <form class="form1" method="post" action="<?php echo base_url('index.php/EmailController/send')?>" enctype="multipart/form-data">
                <input type="email" name="to" placeholder="Email">
                <br><br>
                <input type="text" name="name" placeholder="Fullname(LN, FN, M.I.)">
                <br><br>
                <input type="text" name="contactnumber" placeholder="Contact Number">
                <br><br>
                <input type="text" name="address" placeholder="Address">
                <br><br>
                <input type="text" name="age" placeholder="Age">
                <br><br>
                <input type="text" name="gender" placeholder="Gender">
                <br><br>
                <input type="text" name="height" placeholder="Height(foot)">
                <br><br>
                <input type="text" name="weight" placeholder="Weight(kgs)">
                <br><br>
                <input name="typeofmembership" list="typeofmembership" placeholder="Type of Membership">
                <datalist id="typeofmembership">
                  <option value="Monthly">1</option>
                  <option value="Monthly w/ Coach">2</option>
                </datalist>
                <br><br>          
                <button type="submit" name="savee" class="submit" align="center">Proceed</button>
                <!--<textarea rows="6" id="message" name="message" placeholder="Type your message here"></textarea -- >
            </form>
        </div>
    </body>
</html>