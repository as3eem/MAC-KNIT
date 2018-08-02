<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 5/7/18
 * Time: 10:34 AM
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class OTP extends CI_Model
{

    function sendOTP($otp, $number)
    {

        $msg= 'Your OTP for KNIT CWN registration is '.$otp.". Do not share this with anyone else.";
        $number=urlencode($number);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=MSGIND&route=4&mobiles=91".$number."&authkey=202958A7pgrgcKcon5aa9ff9d&country=91&message=".$msg,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
            echo "<br>An error has been encountered. Try again later between 9AM to 9PM.";
            die;
        } else {
//            echo $response;
        }

    }
}
