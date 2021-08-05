<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['summonthy']))
    {
        func();
    }

    function func()
    {
        $mensagem = $_POST['mensagem'];

        if ($_POST['summonthy'] == "0")
        {
            $para = $_POST['para0'];
            $nome = $_POST['nome0'];
        }

        if ($_POST['summonthy'] == "1")
        {
            $para = $_POST['para1'];
            $nome = $_POST['nome1'];
        }

        if ($_POST['summonthy'] == "2")
        {
            $para = $_POST['para2'];
            $nome = $_POST['nome2'];
        }

        $email = "gabriela.goroncy@carambola.com.vc";
        $to = $para;
        $subject = "Alguém quer fazer contato com você no CampFriend!";
        $message = "Olá, ".$nome."!";
        $message .= "Gabi te enviou a seguinte mensagem através do CampFriend:\r\n";
        $message .= $mensagem."\r\n";
        $message .= "Gostou? Caso queira continuar o papo é só responder esse e-mail! Caso a mensagem viole nossos termos de uso, por favor, encaminhe ela para denuncias@campfriend.com.br para que possamos analisar!\r\n";
        $message .="Atenciosamente,\r\n";
        $message .= "Equipe CampFriend";
        $headers = "From: contato.campfriend@gmail.com"."\r\n"."Reply-To: ".$email."\r\n";

        $retval = mail($to,$subject,$message,$headers);

        if($retval == true){
            echo "Mensagem enviada com sucesso! :D";
            header( "refresh:5;url=main.php" );
        }else{
            echo "Ocorreu um erro, tente novamente! D:";
            header( "refresh:5;url=main.php" );
        }   
    }
?>
