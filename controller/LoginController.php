<?php 

require_once "./controller/OturumController.php";

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    //echo $email." ".$pssword;

    $query = $db->query("SELECT * FROM users", PDO::FETCH_ASSOC);
    if ( $query->rowCount() ){
        foreach( $query as $row ){
            if($row['email'] == $email)
            {
                //echo "kayıtlı email var <br>";
                if($row['sifre'] == $password)
                {
                    //echo "şifreniz dogru";
                    header("Location: ./");
                    $_SESSION['oturum'] = true;

                }
                else
                {
                    echo "şifre yanlış";
                }
            }
        }
    }

}

?>
