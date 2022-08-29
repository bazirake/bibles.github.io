<?php

 $server="host=ec2-3-213-228-206.compute-1.amazonaws.com
 port=5432 dbname=dev16dn1389kf3  user=mjrioleaafsccl password=761ac21c836fc18b50561f702465dcb2d9c56c1f9a23b2de91e7ff8f51fc34af";
  $con=pg_connect($server);
  if(!$con){
   	die("connection fail".pg_connect_error());
 }

 $sql1=pg_query($con,'SELECT * FROM member');
 if($sql1){
  while($resul=pg_fetch_object($sql1)){
 	echo $resul->name;	
 	}
 }
 else{
 	echo "no";
 }

?>