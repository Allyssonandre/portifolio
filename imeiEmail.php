<?php

include_once './Api/conecta.php';

$emailimei  = $_POST['emailimei'];
$senhaimei  = $_POST['senhaimei'];
$codigoimei = $_POST['codigoimei'];

if ($emailimei && !$codigoimei && !$senhaimei) {  //caso nao tenha sida enviada uma nova senha envia o email e seta o valor do codigo verificador na coluna
    if (verificaEmail($emailimei, $link)) {
        $novoCodigo = geraNumeroRandomico();
        if(enviaEmail($emailimei, $novoCodigo)){
            $cadastraNumero = salvaNumeroConfere($emailimei, $novoCodigo, $link);
            if ($cadastraNumero) {
                echo 1;
            } else {
                echo 2;
            }
        } else {
            echo 8;
        }            
    }
    else{
        echo 3;
    }
} else if ($senhaimei && $codigoimei && $emailimei) { //quer dizer que temos uma nova senha
    $codigoCadastrado = buscaCodigo($emailimei, $link);

    if ($codigoCadastrado == $codigoimei) {
        $sql = "UPDATE imei
                   SET senhaimei = '$senhaimei'
                 WHERE emailimei = '$emailimei'";
        $query = mysqli_query($link, $sql);
      if($query){             
        echo 7;
    }
    } else {
        echo 5;
    }
} else {
    echo 6;
}

/**
 * Salva o codigo de verificação na coluna 'codigoverificador' do banco
 * @param String $email
 * @param int $novoCodigo
 * @return boolean true em caso de sucesso, ou erro caso algo tenha dado errado
 */
function salvaNumeroConfere($emailimei, $novoCodigo, $link) {
    $sql = "UPDATE imei
               SET codigoverifica = $novoCodigo
             WHERE emailimei = '$emailimei'";

    $query = mysqli_query($link, $sql);

    if ($query) {
        return true;
    } else {
        return false;
    }
}

/**
 * Função que gera um nomero de quatro digitos randômicos
 * @return int codigo randomico gerado
 */
function geraNumeroRandomico() {
    $numUm = rand(0, 5);
    $numDois = rand(0, 5);
    $numTres = rand(0, 5);
    $numQuatro = rand(0, 5);

    return $numUm . $numDois . $numTres . $numQuatro;
}

/**
 * Busca o código cadastrado para o email no banco
 * @param String $email
 * @return int codigo verificador
 */
function buscaCodigo($emailimei, $link) {
    try {
        $sql = "SELECT codigoverifica
                  FROM imei
                 WHERE emailimei = '$emailimei'";

        $query = mysqli_query($link, $sql);

        return mysqli_fetch_object($query)->codigoverifica;
    } catch (mysqli_sql_exception $ex) {
        echo $ex->getMessage();
    }
}

/**
 * Verifica se o email existe na base de dados
 * @param String $email email para verificação
 * @param $boolean $link de conexao
 * @return boolean
 */
function verificaEmail($emailimei, $link) {
    $sql = "SELECT * 
              FROM imei
             WHERE emailimei = '$emailimei'";
    $query = mysqli_query($link, $sql);
    if (mysqli_num_rows($query) > 0) {
        return true;
    } else {
        return false;
    }
}

function enviaEmail($emailimei, $codigo) {
    include_once './Api/PHPMailer_5.2.0/class.phpmailer.php';
    
    $mail = new PHPMailer(true);
    $mail->setLanguage("pt");
    //conf servidor
    $host = 'smtp.live.com';
    $username = 'andreallysson30@hotmail.com'; //aqui  vai a configuração do seu servidor
    $password = 'hardcore_@'; //a senha o seu email no servidor
    $port = 587;
    $secure = 'tls';
    //remetente
    $from = $username;
    $fromName = "AcheiMeuDoc";
    $mail->isSMTP();
    $mail->Host = $host;
    $mail->SMTPAuth = true;
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->Port = $port;
    $mail->SMTPSecure = $secure;
    $mail->From = $from;
    $mail->FromName = $fromName;
    //destinataio
    $mail->addAddress($emailimei, 'Cliente');
    $mail->isHTML(true);
    $mail->CharSet = 'utf-8';
    $mail->WordWrap = 70;
    $mail->Subject = 'Código de Recuperação de Senha';
    $mail->Body = "Foi solicitado um código de recuperação de senha para o Email: <b>$email </b><br>
                   Seu código de recuperação de Email é: <b>$codigo</b><br><hr><br>
                   Este é um email automático, por favor não responda";
    $mail->AltBody = "Seu código de recuperação para acesso é: $codigo";
    
    if($mail->Send() == 1){
        return true;
    }
    else{
        return false;
    }
} 
