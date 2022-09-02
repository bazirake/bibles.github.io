<?php
include '../connection.php';
$sql_data= "SELECT * FROM member ORDER BY id DESC";
$sql_run1=pg_query($con,$sql_data);
if ($sql_run1)
{
 $res=[];
 if(pg_num_rows($sql_run1)>0)
 {
     $i=1;
  while($result=pg_fetch_object($sql_run1))
   {
    $dd=array('id'=>$i,
      'mid'=>$result->id,
      'fname'=>$result->fname,
      'lname'=>$result->lname,
      'email'=>$result->email,
       'phone'=>$result->phone,
       'dates'=>$result->dobirth,
       'country'=>$result->county,
       'province'=>$result->provice,
       'district'=>$result->district,
       'sector'=>$result->sector,
       'cell'=>$result->cell,
       'village'=>$result->village,
       'localc'=>$result->localcom,
       'currentc'=>$result->currentcom
       );
       array_push($res,$dd);
    $i++;
    }
   $ress=sendData($res,200);
     echo $ress;
 }
 else{
  $ress= sendData($res,404);
   echo $ress;
 }
 }
function sendData($data=[],$codes)
 {
    $mess=[];
   if(!empty($data))
     {
     $mess=array('pushdata'=>$data,'codes'=>$codes);
     }
   else{
     $mess=array('pushdata'=>$data,'codes'=>$codes);
   }
   return json_encode($mess);
 }
