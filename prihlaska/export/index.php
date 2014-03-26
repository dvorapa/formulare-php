<?php
/*  __                                        */
/* /  \ _| _|_  _ _/ _ /   _ _    |_  _  _    */
/* \__/(_|(-|_)| (_|| )|  _)(_)|_||_)(_)| |_| */
/*                                            */
$Slozka="./";
$Soubory=array_diff(scandir($Slozka),array(".","..","index.php"));
foreach($Soubory as $Soubor){
if(filemtime($Slozka.$Soubor)<(time()-60*60*24*idate("t"))){
unlink($Slozka.$Soubor);
}}
?>