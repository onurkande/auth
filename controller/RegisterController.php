<?php 
 require_once "./controller/OturumController.php";

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $query = $db->prepare("INSERT INTO users SET
    kullanici_adi = ?,
    email = ?,
    sifre = ?");
    $insert = $query->execute(array(
        $username, $email, $password
    ));
    if ( $insert ){
        $last_id = $db->lastInsertId();
        print "insert işlemi başarılı!";
    }
}

?>