<?php
include '../connect.php';
$lid=$_POST['log_id'];
$sql=mysqli_query($con,"SELECT * from inc_exp where status='expence' && log_id='$lid'");
$list=array();
if ($sql->num_rows>0) {
   while($row=mysqli_fetch_assoc($sql))
   {
    $myarray['result']='success';
    $myarray['id']=$row['id'];
    $myarray['source']=$row['source'];
    $myarray['amount']=$row['amount'];
    $myarray['date']=$row['date'];

    array_push($list,$myarray);



   }
}
else{
    $myarray['result']='failed';
    array_push($list,$myarray);
}
echo json_encode($list);