<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!-- Project Made by MOHIT KUMAR (https://www.facebook.com/VIGOROUS.MKUMAR)-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>KNIT Network Registration Form</title>
    <link href="signal.ico" rel="shortcut icon">
    <link rel="stylesheet" href="style.css" media="screen"/>
    <link rel="stylesheet" href="mediaqueries.css"/>
    <script type="text/javascript" src="countries.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        function checkSize() {
            //alert("ddfd");
            var input = document.getElementById("upload");
            var fname = document.getElementById("upload").value;
            var extension = fname.substr(fname.lastIndexOf('.'));
//alert(fname);
//alert(extension);


            // check for browser support (may need to be modified)
            if (input.files && input.files.length == 1) {
                if (input.files[0].size > 307200) {
                    alert("The file type must be less than .jpg or .png and size should be less than 300 KB");
                    return false;
                }
                else {
                    if ((extension.toLowerCase() == ".png") || (extension.toLowerCase() == ".jpg") || (extension.toLowerCase() == ".jpeg")) {
                        return true;
                    }
                    else {
                        alert("The file type must be less than .jpg or .png and size should be less than 300 KB");
                        return false;
                    }
                }
            }

            return true;
        }
    </script>
    <style type="text/css">

        *, *:after, *:before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: url(bg.jpg) repeat;
            background-size: cover;
            height: 100vh;
        }

        h1 {
            text-align: center;
            font-family: Tahoma, Arial, sans-serif;
            color: #06D85F;
            margin: 100px 0;
        }

        .box {
            width: 40%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.2);
            padding: 35px;
            border: 2px solid #fff;
            border-radius: 20px/50px;
            background-clip: padding-box;
            text-align: center;
        }

        .button {
            font-size: 1em;
            padding: 10px;
            color: #fff;
            border: 2px solid #06D85F;
            border-radius: 20px/50px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease-out;
        }

        .button:hover {
            background: #06D85F;
        }

        .popup h2 {
            margin-top: 0;
            color: #333;
            font-family: Tahoma, Arial, sans-serif;
        }

        .popup .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 0.2s;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }

        .popup .close:hover {
            color: #06D85F;
        }

        .popup .content {
            max-height: 30%;
            overflow: auto;
            color: #333;
            line-height: 150%;
            font-family: Arial, sans-serif;
        }

        /*Let's make it appear when the page loads*/
        .overlay:target:before {
            display: none;
        }

        .overlay:before {
            content: "";
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: block;
            background: rgba(0, 0, 0, 0.6);
            position: fixed;
            z-index: 9;
        }

        .overlay .popup {
            background: #fff;
            border-radius: 5px;
            width: 30%;
            position: fixed;
            top: 0;
            left: 35%;
            padding: 25px;
            margin: 70px auto;
            z-index: 10;
            -webkit-transition: all 0.6s ease-in-out;
            -moz-transition: all 0.6s ease-in-out;
            transition: all 0.6s ease-in-out;
        }

        .overlay:target .popup {
            top: -100%;
            left: -100%;
        }

        @media screen and (max-width: 768px) {
            .box {
                width: 70%;
            }

            .overlay .popup {
                width: 70%;
                left: 15%;
            }
        }
    </style>
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">
<div class="box">
    <a class="button" href="#">Read Instructions Again.</a>
</div>

<div id="popup1" class="overlay">
    <div class="popup">
        <h2>Instructions</h2>
        <a class="close" href="#popup1">&times;</a>
        <div class="content">
            1. A student can register only one device.</br>
            2. Please provide valid email id. This email id will be used for further references.</br>
            3. You can only get access to network only after admin finds your details valid. </br>
            4. You will be sent a confirmation email once admin approves your request.</br>
            <strong>Image and Mac format-</strong></br>
            1. Please provide mac in following format.<br>
            Only 0-9 and a-f are allowed in mac seperated by hyphens(-). <br>(eg. 82-a4-b5-7d-46-67 )
            <a href="MAC_wiki.html">See here.</a><br>
            2. Please upload scanned image of your colleg id. Only jpg and png formats are allowed (size limit:300KB)
            <br>
            3. Unclear image of college id may lead to rejection of your request.


        </div>
    </div>
</div>


<!-- Start Formoid form-->
<link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-blue.css" type="text/css"/>
<script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>

<form enctype="multipart/form-data" class="formoid-solid-blue"
      style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px"
      method="post" action="upload.php" onsubmit="return checkSize()">


    <div class="title"><h2>KNIT Network Registration Form</h2></div>


    <div class="element-input"><label class="title"><span class="required">*</span></label>
        <div class="item-cont"><input class="large" type="text" name="input" required="required"
                                      placeholder="Your Name"/><span class="icon-place"></span></div>
    </div>
    <div class="element-number"><label class="title"><span class="required">*</span></label>
        <div class="item-cont"><input class="large" type="text" min="10000" max="9999999" name="number"
                                      required="required" placeholder="Roll Number" value=""/><span
                    class="icon-place"></span></div>
    </div>


    <div class="element-email"><label class="title"><span class="required">*</span></label>
        <div class="item-cont"><input class="large" type="email" name="email" value="" required="required"
                                      placeholder="Email"/><span class="icon-place"></span></div>
    </div>
    <div class="element-phone"><label class="title"><span class="required">*</span></label>
        <div class="item-cont"><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{10,}" maxlength="24"
                                      name="phone" required="required" placeholder="Phone Number" value=""/><span
                    class="icon-place"></span></div>
    </div>


    <div class="element-select" title="Select your course"><label class="title"><span class="required">*</span></label>
        <div class="item-cont">
            <div class="large"><span><select name="select" id="country" required="required">

		<option value="B.Tech">B.Tech</option>
		<option value="MCA">MCA</option></select><i></i><span class="icon-place"></span></span></div>
        </div>
    </div>
    <div class="element-select"><label class="title"></label>
        <div class="item-cont">
            <div class="large"><span><select name="select1" id="state" required="required">

		<option value="">Select Branch</option>
		</select><i></i><span class="icon-place"></span></span></div>
        </div>
    </div>

    <script language="javascript">
        populateCountries("country", "state");


    </script>


    <div class="element-select" title="Select you year"><label class="title"></label>
        <div class="item-cont">
            <div class="large"><span><select name="select2" id="select2" required="required">

		<option value="">Select Year</option>
		</select><i></i><span class="icon-place"></span></span></div>
        </div>
    </div>


    <div class="element-input"><label class="title"><span class="required">*</span></label>
        <div class="item-cont"><input class="large" type="text" name="input1" required="required"
                                      pattern="^([0-9-a-f]{2}[-]){5}([0-9-a-f]{2})$" placeholder="MAC Address"/><span
                    class="icon-place"></span></div>
    </div>


    <div class="element-file"><label class="title">
            <span class="required">*<br/></span></label>
        <div class="item-cont">
            <label class="large">
                <div class="button">Choose File
                </div>
                <input type="file" id="upload" class="file_input" accept=".jpg,.JPG,.png,.PNG,.jpeg,.JPEG" name="file"
                       required="required"/>
                <div class="file_text">No file selected</div>
                <span class="icon-place"></span>
            </label>
        </div>

    </div>
    <div class="submit"><input type="submit" value="Submit"></div>
</form>
<script type="text/javascript" src="formoid_files/formoid1/formoid-solid-blue.js"></script>


<!-- Stop Formoid form-->


</body>
<div id="footerHolder">

    <div id="footer">

        <div id="copyright">

            Final Year Project(2012-16) Mentor-Prof. Samir Sir

        </div><!-- #copyright -->

        <div id="credit">

            Submitted by- <a href="https://www.facebook.com/prashant.singh.501151">Prashant Singh</a> <a
                    href="https://www.facebook.com/VIGOROUS.MKUMAR"> ,Mohit Kumar</a><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a
                    href="https://www.linkedin.com/in/adarsh-srivastava-9a825aba">Adarsh Srivastava</a>, Sarveshvar
            Singh

        </div><!-- #credit -->

        <div class="clear"></div>

    </div><!-- #footer -->

</div><!-- #footerHolder -->
</html>
