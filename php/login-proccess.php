



            <?php
    session_start();
    $username='';
    $password='';
            if (isset($_POST['username']) && isset($_POST['passwordset']))
            {
                      
                $usernameset = $_POST['username'];
                $passwordset = $_POST['passwordset'];
      
                if ($usernameset == '' || $passwordset ==''){
                    header("location:../admin?a=1");
                    exit();
                } 
            }
            else {
           
                header("location:../admin?a=1");
                exit();
            }
            
 
include_once('connect.php'); 

$sql = "SELECT id from `user` where `username`='$usernameset' and `password` = '$passwordset' limit 1;";

$user = $con->query($sql) or dir($con->error);
if ($row=$user->fetch_assoc())
{
      
        $_SESSION["user_id"] = $row["id"];
       
       header("location:../panel.php");
       exit();
}
else{
    header("location:../admin?a=1");
}


?>
