<?php 
 include_once("important.php");
 
?>

<!DOCTYPE html>
<html>
<head>

  
  <div class="modal fade"  id="delete" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="background: linear-gradient(to bottom, #216bef 0%, #61ce70 100%); color:white; font-size: 30px; text-align: center;">
           
            <div class="modal-body">
                <p>user has been removed</p>                     
            </div>    
        </div>
    </div>
</div>

<div class="modal fade"  id="not_delete" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="background: linear-gradient(to bottom, #216bef 0%, #61ce70 100%); color:white; font-size: 30px; text-align: center;">
           
            <div class="modal-body">
                <p>Could not remove</p>                     
            </div>    
        </div>
    </div>
</div>

</head>
<body>

</body>
</html>

<?php 
 include_once("posted_ad.php");

 $email = $_SESSION['da_email'];
 
 $result = query($sql);

 $dl="DELETE FROM property Where user = '$email'";
 $res = query($dl);

 if($res){
 echo "<script>$('#delete').modal('show')</script>";
 	header("refresh:2;url=posted_ad.php");
 }
  else{
 	echo "<script>$('#not_delete').modal('show')</script>";
 	header("refresh:2;url=admin.php");
 }
?>
