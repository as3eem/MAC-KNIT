<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 2/7/18
 * Time: 12:14 PM
 */
?>
<head>
    <link href="<?=base_url()?>/Static/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <script src="<?=base_url('/Static/mac/registrationPage/js/jquery2.0.3.min.js')?>"></script>
</head>
<style>
    .be-detail-header { border-bottom: 1px solid #edeff2; margin-bottom: 50px; }
</style>


<div class="container be-detail-container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <br>
            <img src="<?=base_url('Static/Images/otp.png')?>" class="img-responsive" style="width:200px; height:200px;margin:0 auto;"><br>

            <h1 class="text-center">Verify your mobile number</h1><br>
            <p class="lead" style="align:center"></p><p> Thanks for giving your details. An OTP has been sent to Mobile Number <b><?=$_SESSION['contact']?></b>. Please enter the 4 digit OTP below for Successful Registration</p>  <p></p>
            <br>

            <form method="post" id="veryfyotp" action="<?=base_url('Welcome/otpCheck')?>">
                <div class="row">
                    <div class="form-group col-sm-8">
                        <span style="color:red;"></span>
                        <input type="text" class="form-control" name="otp" placeholder="Enter your OTP number" required="">
                    </div>
                    <button type="submit" class="btn btn-primary  pull-right col-sm-3">Verify</button>
                </div>
            </form>
            <br><br>
        </div>
    </div>
</div>
