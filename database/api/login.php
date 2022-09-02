<?php
session_start();
include '../connection.php';
  $sql1="SELECT * FROM admin WHERE email='$_POST[email]' AND password='$_POST[password]'";
  $sql1_run=pg_query($con,$sql1);

  if (pg_num_rows($sql1_run)>0)
  {
    $_SESSION['user']=$_POST['email'];
    $re=array('message'=>$_POST['email'],'codes'=>200);
     echo sendResponse($re);
  }
  else{
     $re=array('message'=>'Incorrect Password or email','codes'=>404);
     echo sendError($re);
  }

  function sendResponse($data=[])
   {
     return json_encode($data);
   }
  function sendError($data=[])
   {
     return json_encode($data);
   }
?>