<?php
if(!isset($_SESSION))
	session_start();
$id=$_GET['id'];
$arraysp=explode("@",$_SESSION['producelist']);
for($i=0;$i<count($arraysp);$i++){
   if($arraysp[$i]==$id){
	  $arraysp[$i]="";
	}
 }
$_SESSION['producelist']=implode("@",$arraysp);
header("location:gouwuche.php");
?>