<?php
/* ___                          __      __  */
/*  _/ _  _ _  _ _    _/ _ /   |__)|__||__) */
/* /__|_)| (_|(_(_)\/(_|| )|.  |   |  ||    */
/*    |                                     */
session_start();
$Pole=array("AkadRok","Program","Forma","Jazyk");############################### Proměnné

/* ___                                   */
/*  _/ _/ _ . _   _| _    _ _ _ _. _  _  */
/* /__(_||_)|_)  (_|(_)  _)(-_)_)|(_)| ) */
/*       |                               */
if(!empty($_POST)){
foreach($Pole as $Promenna){
!empty($_POST[$Promenna])?$_SESSION[$Promenna]=$_POST[$Promenna]:$_SESSION[$Promenna]="";
}
}

/* ___                                 */
/*  _/ _/ _ . _   _| _    _ _  _ | . _ */
/* /__(_||_)|_)  (_|(_)  (_(_)(_)|(|(- */
/*       |                             */
if(!empty($_POST["Cookie"])){
$d=time()+60*60*24*$_POST["Cookie"];############################################ $d => $_SESSION["d"]?
foreach($Pole as $Promenna){
setcookie($Promenna,$_SESSION[$Promenna],$d);
}
}

/* ___                                         */
/*  _/ _/ _ . _   _| _    _| _ |_ _ |_  _/_  _ */
/* /__(_||_)|_)  (_|(_)  (_|(_||_(_||_)(_|/_(- */
/*       |                                     */
if(!empty($_POST["Databaze"])){
################################################################################ Databáze
}

/* ___                                       */
/*  _/ _/ _ . _   _| _    _ _    |_  _  _    */
/* /__(_||_)|_)  (_|(_)  _)(_)|_||_)(_)| |_| */
/*       |                                   */
$n=session_id();################################################################ $n => $_SESSION["n"]?
$Sklad=file_get_contents("Nova.php");
$Funkce=fopen("../Export/$n.php","w+");
fwrite($Funkce,$Sklad);
fclose($Funkce);
header("Location: Vysledek.php");

?>