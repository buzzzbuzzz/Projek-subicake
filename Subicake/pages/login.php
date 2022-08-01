<?php
ob_start();
session_start();
include "../include/config.php";
include "../main/head.php";
?>
<body>
 <div class="container">
        <div class="register" style="padding: 40px !important;
    margin-top: 0 !important;
       height: 730px;
    border-radius: 33px 33px 33px 33px;
    background: #FCFBFA !important;
    border-color: #ccc;
    border: none;
    padding-right: 10px;
    margin: 85px auto 0 !important;
    max-width: 642px;
    box-shadow: none;">
            <h1 style="text-align:center;margin:20px 0 20px 0"> Login </h1>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="InputEmail1" style="font-size:20px;"></label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailin" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="InputPassword" style="font-size:20px;"></label>
                    <input type="passowrd" name="password" class="form-control" id="InputPassword" aria-describedby="passwordin" placeholder="Password">
                </div>
                <div class="but" style="text-align:center">
                    <p> Forgot Password? Click <a href="forgot.php">  here. </a></p>
                    <button type="submit" name="login" class="btn btn-primary" style="width:100px;">Submit</button>
                    <p> Didn't have an account? Register <a href="signup.php"> here </a></p>
                </div>
            </form>
        </div>
</body>
<?php
include "include/footer.php";
?>