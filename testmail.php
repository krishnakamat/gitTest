<?php
// the message
$msg = "First line of text\nSecond new line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("krishnakumarkamat@gmail.com","My New SSS subject",$msg);
?> 