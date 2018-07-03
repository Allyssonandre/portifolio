<?php
if(isset($_POST['submit_password']) && $_POST['chave'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  require_once("Api/conexao.php");
  $select=mysqli_query("update formulario set senha='$pass' where email='$email'");
}
?>