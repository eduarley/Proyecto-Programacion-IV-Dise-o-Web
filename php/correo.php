<?php
 
 if(isset($_POST['enviar'])){
    if(!isset($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg'])){
        $name= $_POST['name'];
        $asunto ="";
        $email= $_POST['email'];
        $msg=$_POST['msg'];


        $header = "From: noreply@example.com"."\r\n";
        $header.= "Reply-To: noreply@example.com"."\r\n";
        $header.= "X-Mailer= PHP/".phpversion();
        $mail= @mail($email,$asunto,$msg,$header);
        if($mail){
            echo "<h4>Mail enviado exitósamente</h4>";
        }else{
            echo "<h4>Error al enviar el correo</h4>";
        }
    }
}
?>

