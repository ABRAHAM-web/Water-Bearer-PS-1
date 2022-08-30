<?php

$to = 'abraham@water-bearer.co.za';
$subject = 'Hierdie is my toets eops';
$message = 'Ek speel so bietjie rond om eposte met php te stuur.';
$headers = 'From: The sender Name <water@water-bearer.co.za>\r\n';
$headers .= 'Reply-To: <water@water-bearer.co.za>\r\n';
$headers .= 'Context-type: text/html\r\n';

mail($to,$subject,$message,$headers);
header("Location: ../index.php");
?>
<a href = "javascript:history.back()">Back to previous page</a>
