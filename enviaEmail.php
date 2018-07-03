<?php 
function enviaEmail($email,$mensagem){
        $servidor = "smtp.gmail.com";
        $porta    = 587;       
        $senha    = "hardcore34";
        $usuarioServidor = "andreallysson59@gmail.com";
        $emailUsuario = $email;
        require_once("PHPMailer/PHPMailerAutoload.php");
        require_once("PHPMailer/class.smtp.php");
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = $servidor;
        $mail->Port = $porta;
        $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
        $mail->SMTPSecure = 'tls';
        $mail->Username = $usuarioServidor;
        $mail->Password = $senha;
        $mail->SetFrom($usuarioServidor);
        $mail->Subject = "Muda senha";
        $mail->AltBody = "Para ler esta mensagem, por favor user um leitor de HTML5";
        $mail->MsgHTML($mensagem);
        $mail->AddAddress($emailUsuario);
        if ($mail->Send()) {
          ?>
          <script>
            alert("Enviamos para seu email informações de uma redefinição de senha");
          </script>
          <?php 
        }else{
          ?>
          <script>
            alert("Houve um erro ao manda um e-mail de redefinição de senha.");
          </script>
          <?php
        }
}
?>