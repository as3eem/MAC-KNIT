<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 28/6/18
 * Time: 10:29 PM
 */
?>

<!--A Design by as
Author: Aseem Srivastava
Author URL: http://github.com/as3eem
-->
<!DOCTYPE html>
<head>
    <title>MAC-Portal | Registration/Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Registration / Login KNIT MAC-Portal, Login form, KNIT Students login, KNIT MAC Address Portal, KNIT, CSEDC, as3eem" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom CSS -->
    <link href="<?=base_url('/Static/mac/registrationPage/css/style.css')?>" rel='stylesheet' type='text/css' />
    <!-- font CSS --><!--
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">-->
    <link href="//fonts.googleapis.com/css?family=Signika:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

    <!--font CSS-->
    <script src="<?=base_url('/Static/mac/registrationPage/js/jquery2.0.3.min.js')?>"></script>
</head>
<body class="dashboard-page">
<div class="main-grid">
    <div class="agile-grids">
        <!-- validation -->
        <div class="grids">
            <div class="progressbar-heading grids-heading">
                <h2>registration / login form</h2>
            </div>

            <div class="forms-grids">
                <div class="forms3">
                    <div class="w3agile-validation w3ls-validation">
                        <div class="panel panel-widget agile-validation register-form">
                            <div class="validation-grids widget-shadow" data-example-id="basic-forms">
                                <div class="input-info">
                                        <h3>Register yourself here:</h3>
                                </div>
                                <div class="form-body form-body-info">
                                    <form data-toggle="validator" action="#" method="post">
                                        <div class="form-group valid-form">
                                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Full Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" required="">
                                                    I'm a Student
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" required="">
                                                    I'm a Staff Member
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group valid-form">
                                            <input type="text" class="form-control" id="roll" name="roll" placeholder="Roll Number | Staff ID" required="">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="course" name="course" required>
                                                <option value="" selected disabled style="color: ">----Select Course----</option>
                                                <option value="btech" style="color: #0f0f0f">Bachelor in Technology (B.Tech)</option>
                                                <option value="mca" style="color: #0f0f0f">Masters in Computer Application (MCA)</option>
                                                <option value="mtech" style="color: #0f0f0f">Masters in Technology (M.Tech)</option>
                                                <option value="staff" style="color: #0f0f0f">Staff Member</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="branch" required>
                                                <option value="" selected disabled style="color: #0f0f0f">----Select Branch----</option>
                                                <option value="CSE" style="color: #0f0f0f">CSE - Computer Science and Engineering</option>
                                                <option value="IT" style="color: #0f0f0f">IT - Information Technology</option>
                                                <option value="EE" style="color: #0f0f0f">EE - Electrical Engineering</option>
                                                <option value="CE" style="color: #0f0f0f">CE - Civil Engineering</option>
                                                <option value="ME" style="color: #0f0f0f">ME - Mechanical Engineering</option>
                                                <option value="EC" style="color: #0f0f0f">EX - Electronics Engineering</option>
                                                <option value="MCA" style="color: #0f0f0f">MCA</option>
                                                <option value="staff" style="color: #0f0f0f">Staff Member</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="year" required>
                                                <option value="" selected disabled style="color: #0f0f0f">----Select Year----</option>
                                                <option value="1" style="color: #0f0f0f">First (1)</option>
                                                <option value="2" style="color: #0f0f0f">Second (2)</option>
                                                <option value="3" style="color: #0f0f0f">Third (3)</option>
                                                <option value="4" style="color: #0f0f0f">Fourth (4)</option>
                                                <option value="staff" style="color: #0f0f0f">Staff Member</option>
                                            </select>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <input type="email" class="form-control" name="Email" placeholder="Email" data-error="That email address is invalid" required="">
                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            <span class="help-block with-errors">Please enter a valid email address</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone" required="">
                                            <span class="help-block with-errors">Please enter a valid 10 digit phone number. An OTP will be sent to this number.</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" name="Password" placeholder="Password" required="">
                                            <span class="help-block">Minimum of 6 characters</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" name="Confirm password" placeholder="Confirm password" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="terms" data-error="Before you wreck yourself" required="">
                                                    I have read and accept terms of use.
                                                </label>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary disabled">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-widget agile-validation">
                            <div class="validation-grids validation-grids-right login-form">
                                <div class="widget-shadow login-form-shadow" data-example-id="basic-forms">
                                    <div class="input-info">
                                        <h3>Login form :</h3>
                                    </div>
                                    <div class="form-body form-body-info">
                                        <form data-toggle="validator" action="#" method="post">
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" name="Eamil" placeholder="Enter Your Email" data-error="Bruh, that email address is invalid" required="">
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword1" name="Password" placeholder="Password" required="">
                                            </div>
                                            <div class="bottom">
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="terms1" data-error="Before you wreck yourself" required="">
                                                            Remember me
                                                        </label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary disabled">Login</button>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
        </div>
        <!-- //validation -->
    </div>
</div>
<!-- footer -->
<div class="footer">
    <p>Developed by <a href="https://github.com/as3eem" target="_blank">Aseem Srivastava</a> (2016-2020 Batch) under mentorship of Prof. Samir Srivastava </p>
</div>
<!-- //footer -->
<!-- input-forms -->


<script type="text/javascript" src="<?=base_url('/Static/mac/registrationPage/js/valida.2.1.6.min.js')?>"></script>
<script type="text/javascript" >

    $(document).ready(function() {

        // show Valida's version.
        $('#version').valida( 'version' );

        // Exemple 1
        $('.valida').valida();

        // Exemple 2
        /*
        $('.valida').valida({

            // basic settings
            validate: 'novalidate',
            autocomplete: 'off',
            tag: 'p',

            // default messages
            messages: {
                submit: 'Wait ...',
                required: 'Este campo é obrigatório',
                invalid: 'Field with invalid data',
                textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
            },

            // filters & callbacks
            use_filter: true,

            // a callback function that will be called right before valida runs.
            // it must return a boolan value (true for good results and false for errors)
            before_validate: null,

            // a callback function that will be called right after valida runs.
            // it must return a boolan value (true for good results and false for errors)
            after_validate: null

        });
        */

        // setup the partial validation
        $('#partial-1').on('click', function( ev ) {
            ev.preventDefault();
            $('#res-1').click(); // clear form error msgs
            $('form').valida('partial', '#field-1'); // validate only field-1
            $('form').valida('partial', '#field-1-3'); // validate only field-1-3
        });

    });

</script>
<!-- //input-forms -->
<!--validator js-->
<script src="<?=base_url('/Static/mac/registrationPage/js/validator.min.js')?>"></script>
<!--//validator js-->
</body>
</html>

