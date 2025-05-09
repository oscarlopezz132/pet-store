<?php
 include('config/database.php');

$email =$_POST['e_mail'];
$passw =$_POST['p_assw'];

//$hashed_password =password_hash($passw,PASSWORD_DEFAULT);
$hashed_password = $passw;

$sql = " 
select u.id from users u where email = '$email' and passw ='$hashed_password' group by u.id
";
$res = pg_query($conn, $sql);
if(res){
    $row = pg_fetch_assoc($res);
    if($row)['id' ]> 0{
        header('Refresh: 0; url=http://127.0.0.1/pet-store/src/home.php');
    }else{
        echo "login failed !!!!";
    }
}


?>