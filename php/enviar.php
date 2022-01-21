<?php

                
        $name= $_POST['name'];
        $asunto =$_POST['asunto'];
        $email= $_POST['email'];
        $msg=$_POST['msg'];


        $destinatario = "eduarley99@gmail.com";
        $carta="De: $name \n";
        $carta.= "Correo: $email \n";


        $header = "From: Cliente"."\r\n";
        $header.= "Reply-To: noreply@example.com"."\r\n";






        $genero="";
        if(isset($_POST['genero'])){
                $genero=$_POST['genero'];       
        }else{
                $genero=null;
        }

        if($genero!=null){
                if($genero=="hombre"){
                        $carta.="Género: Masculino \n";
                }else{
                        $carta.="Género: Femenino \n";
                }
        }




        $grado="";

        if(isset($_POST['checkbox1'])||isset($_POST['checkbox2'])||isset($_POST['checkbox3'])){
                $grado.="Grado Académico:\n";
                if(isset($_POST['checkbox1'])){
                        $grado.="-Escuela\n";
                }
                
                elseif(isset($_POST['checkbox2'])){
                        $grado.="-Colegio\n";
                }
                        
                elseif(isset($_POST['checkbox3'])){
                        $grado.="-Universidad\n";
                }              
                
        }


        if(isset($_POST['checkbox1'])&&isset($_POST['checkbox2'])){
        $grado="";
        $grado.="Grado Académico: \n-Escuela\n-Colegio\n";
        }
        if(isset($_POST['checkbox1'])&&isset($_POST['checkbox3'])){
        $grado="";
        $grado.="Grado Académico: \n-Escuela\n-Universidad\n";
        }
        if(isset($_POST['checkbox2'])&&isset($_POST['checkbox3'])){
        $grado="";
        $grado.="Grado Académico: \n-Colegio\n-Universidad\n";
        }

        if(isset($_POST['checkbox1'])&&isset($_POST['checkbox2'])&&isset($_POST['checkbox3'])){
        $grado="";
        $grado.="Grado Académico: \n-Escuela\n-Colegio\n-Universidad\n";
        }
        $carta.=$grado;
        //$carta.=$_POST['result'];


        $nac="Fecha de nacimiento: ";
        $nac.=$_POST['user_date']."\n";
        $carta.=$nac;





        $carta.= "Mensaje: $msg"; 
        $mail=@mail($destinatario,$asunto,$carta,$header);
        if($mail){
                header('Location:../exito.html');
        }else{
                header('Location:../error.html');
        }

?>