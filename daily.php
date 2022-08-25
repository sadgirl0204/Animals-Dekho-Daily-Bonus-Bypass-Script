<script>

if(performance.navigation.type == 2){

   location.reload(true);

}

</script>

<DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<title>sadgirl</title>

<link href="stylne.css" rel="stylesheet"/>

<style>

body{

   background-color: royalblue;

   justify-content: center;

   align-items: center;

   text-align: center;

   }

input[type=text],input[type=number], input[type=password],input[type=url],input[type=email]{padding: 10px 13px;margin: 13px 0;display: inline-block;border: 2px solid blue;border-radius: 4px;height: 45px;font-size: 15px;Color: blue;box-sizing: border-box;}

 

hr{border: 1;height: 1.6px;background-image:linear-gradient(to right,skyblue,blue, yellow);}  

input[type=Submit] {width: 50%;background-color: blue;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;} .submit:focus{outline: none;box-shadow: 0px 0px 4px #4200FF;border-color: #4200FF;} .submit2:focus{outline: none;box-shadow: 0px 0px 4px red;border-color: red;} div{border-radius: 5px;background-color: #f2f2f2;padding: 20px;}  

h2{

	  font-variant: small-caps;	  background-color: #ffeaea;

	  font-size: 27px;

	  color: blue;

}

h3{

				color: blueviolet;

				font-size: 40px;

				font-variant: small-caps;

				/*text-shadow: 2px 2px 2px #ff009d;*/

				background-color: #f6f6f6;

				padding: 20px;

				

}

#formFooter {

  background-color: #f6f6f6;

  border-top: 1px solid #dce8f1;

  padding: 25px;

  text-align: center;

  border-radius: 0 0 10px 10px;

  margin-top: 100px;

}

.underlineHover:after {

  display: block;

  left: 0;

  bottom: -10px;

  width: 0;

  height: 2px;

  background-color: var(--main-color);

  content: "";

  transition: width 0.2s;

}

.underlineHover:hover {

  color: #0d0d0d;

}

.underlineHover:hover:after{

  width: 100%;

}

#formFooter {

  background-color: #f6f6f6;

  border-top: 5px solid #6655ff;

  padding: 25px;

  text-align: center;

  border-radius: 0 0 10px 10px;

  

}

.underlineHover:after {

  display: block;

  left: 0;

  bottom: -10px;

  width: 0;

  height: 2px;

  background-color: var(--main-color);

  content: "";

  transition: width 0.2s;

}

.underlineHover:hover {

  color: #0d0d0d;

}

.underlineHover:hover:after{

  width: 100%;

}

 

</style>

</head>

<body>

<br>

<center><hr><h2>Coded By sadgirl</h2></center>

<center><hr><h2>Animals Dekho Daily Bonus Bypass Script<h2></h3><hr></center>

    

<?php

error_reporting(0);

if(isset($_REQUEST['submit'])){

 

  $ip=long2ip(rand());

  

$n=15;

function getName($n) {

    $characters = '0123456789';

    $randomString = '';

  

    for ($i = 0; $i < $n; $i++) {

        $index = rand(0, strlen($characters) - 1);

        $randomString .= $characters[$index];

    }

  

    return $randomString;

}

  

$jeet=getName($n);

function generateRandomString($length = 15) {

    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';

    $charactersLength = strlen($characters);

    $randomString = '';

    for ($i = 0; $i < $length; $i++) {

        $randomString .= $characters[rand(0, $charactersLength - 1)];

    }

    return $randomString;

}

//usage 

$myRandomString = generateRandomString(15);

$d_info="name=Device Name||model=ModelName||imei=3$jeet||version=1.3||udid=7$myRandomString";

$a="amount=250::title=Daily Bonus";

$token=$_REQUEST['token'];

$ses1 = generateRandomString(5);

$key = 'asdf5sdf546'.$ses1.'';

$enc_data = base64_encode(openssl_encrypt($a,"AES-128-ECB",$key,OPENSSL_RAW_DATA));

$enc_dinfo = base64_encode(openssl_encrypt($d_info,"AES-128-ECB",$key,OPENSSL_RAW_DATA));

$ses = base64_encode(openssl_encrypt($ses1,"AES-128-ECB","uiysafd4sdf545dc",OPENSSL_RAW_DATA));

$urldata=urlencode($enc_data);

$urldinfo=urlencode($enc_dinfo);

$url="https://ffnewsupdater.xyz/animals_dekho/api/a1fefbx6_eb1f8qc_vepzv/add_coins.php";

$data="data=$urldata&d_info=$urldinfo";

$dd=strlen($data);

$headers=["session: $ses","token: $token","Content-Type: application/x-www-form-urlencoded","Content-Length: $dd","Host: ffnewsupdater.xyz","Connection: Keep-Alive","Accept-Encoding: gzip","User-Agent: okhttp/3.14.9","X-Forwarded-For: $ip"];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS,$data);

curl_setopt($ch,CURLOPT_HEADER,0);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

 curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);

   curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);

   curl_setopt($ch, CURLOPT_ENCODING, 'gzip');

 $output2= curl_exec ($ch);

 curl_close ($ch);

 $dec_output1 = openssl_decrypt(base64_decode($output2),"AES-128-ECB","kjsfdiui@#2kf541",OPENSSL_RAW_DATA);

 $json=json_decode($dec_output1,true);

$msg=$json['msg'];

if ($msg=='Coin added successfully.') {	

echo"<div class='success'><font color='green'><br>Coin Added Successfully !!<br><br></div>";

echo "<meta http-equiv='refresh' content='1'>";

}else{

   echo"<div class='success'><font color='red'>$msg<br><br></div>";

}

echo "<meta http-equiv='refresh' content='3'>";

}

if(!isset($_REQUEST['submit'])){

  echo'  

 <form action="" method="POST">

                 

 

                      

  <input type="text" name="token" class="input_text" placeholder="Enter Your Token" required>  

  

  <input type="submit" class="submit" name="submit" value="Bypass">';

  }

  

  ?>

<div id="formFooter"> 

    <a class="underlineHover" href="https://t.me/sadgirl">Jᴏɪɴ Oᴜʀ Tᴇʟᴇɢʀᴀᴍ Cʜᴀɴɴᴇʟ</a> 

   </div> 

  <h3>sad girl</h3>

 </body>

</html>#B6FF6C
