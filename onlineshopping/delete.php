<?php
session_start();
if($_SESSION['auth']!=1){
	header("location:admin.php?sin='yes'");
}
?>

<?php 
  include("execute/connect.php");
      
      
 if(isset($_GET['del'])){

  $delete_id=$_GET['del'];
  $delete_query="delete from ads where post_id='$delete_id' ";


 if(mysql_query($delete_query)){

    echo "<script> alert('post has been deleted')</script>";
 echo "<script> window.open('viewposts.php','_self')</script>";





  }
 }
      
      
      
      
      
?>