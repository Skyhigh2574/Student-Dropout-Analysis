<?php 
include 'connect.php';
$income=0;
$expense=0;

if(isset($_POST['id']))
{
	$uid=$_POST['id'];
	
	



}
if(isset($_POST['payday']))
{
$sql1 = "SELECT amt FROM `inc` WHERE `uid` = '$uid'";
 $result1 = mysqli_query($conn, $sql1);
 while($row1 = mysqli_fetch_assoc($result1))
                    { $income=$income+$row1['amt'];} 
$sql2 = "SELECT amt FROM `exps` WHERE `uid` = '$uid'";
	$result2 = mysqli_query($conn, $sql2);
           while($row2 = mysqli_fetch_assoc($result2))
                    {    $expense=$expense+$row2['amt'];}
                     $Total=$income-$expense;

                     $sql="SELECT cash from login where uid='$uid'";
   $a=mysqli_query($conn,$sql);
   $update=0;
	while($row=mysqli_fetch_assoc($a))
	{
		$update=$row['cash']+$Total;
    } 
    echo "$update";
    $a="UPDATE `login` SET `cash`='$update' WHERE uid='$uid'";
    $a=mysqli_query($conn,$a);
    header("Location: cash.php");

}
if(isset($_POST['add']))
{
  $Total=$_POST['add'];
   $sql="SELECT cash from login where uid='$uid'";
   $a=mysqli_query($conn,$sql);
   $update=0;
	while($row=mysqli_fetch_assoc($a))
	{
		$update=$row['cash']+$Total;
    } 
    echo "$update";
    $a="UPDATE `login` SET `cash`='$update' WHERE uid='$uid'";
    $a=mysqli_query($conn,$a);
    header("Location: cash.php");
}
if(isset($_POST['subtract']))
{
 $Total=$_POST['sub'];
   $sql="SELECT cash from login where uid='$uid'";
   $a=mysqli_query($conn,$sql);
   $update=0;
	while($row=mysqli_fetch_assoc($a))
	{
		$update=$row['cash']-$Total;
    } 
    echo "$update";
    $a="UPDATE `login` SET `cash`='$update' WHERE uid='$uid'";
    $a=mysqli_query($conn,$a);
    header("Location: cash.php");
}

?>
