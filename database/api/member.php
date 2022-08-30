<?php
 include '../connection.php';
$sql1="SELECT * FROM member WHERE phone='$_POST[phone]' OR email='$_POST[email]'";
$sqr=pg_query($con,$sql1);
if(pg_num_rows($sqr)>0)
  {
   echo sendError('Member already exist',404);
  }
 else{
 $query="INSERT INTO member(fname,
lname,email,phone,dobirth,
county,provice,
district,sector,cell,
village,localcom,currentcom)VALUES('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[dates]','$_POST[country]','$_POST[province]','$_POST[district]','$_POST[sector]','$_POST[cell]','$_POST[village]','$_POST[locmunity]','$_POST[curcomunity]')";
   $result=pg_query($con,$query);
   if($result)
    {
     echo sendResponse('New Member has been registered successfully',200);
    }
  }
 function sendResponse($message,$status){
   $response=array("mess"=>$message,"status"=>$status);
   return json_encode($response);
  }
function sendError($me,$stu)
  {
    $response=array("me"=>$me,"status"=>$stu);
    return json_encode($response);
   }
?>