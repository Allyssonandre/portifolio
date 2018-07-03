<?php
include_once('Api/conexao.php');
if (isset($_POST['submit']))
{

// check for valid email address
$email = $_POST['email'];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $error[] = 'Please enter a valid email address';
}

// checks if the username is in use
$check = "SELECT email FROM formulario WHERE email = '$email'";
$busca = mysqli_query($link,$check);
$check2 = mysqli_num_rows($busca);

//if the name exists it gives an error
if ($check2 == 0) {
$error[] = 'Sorry, we cannot find your account details please try another email address.';
}

// if no errors then carry on
if (!$error) {

$query = mysql_query("SELECT nome FROM formulario WHERE email = '$email' ")or die (mysql_error());
$r = mysql_fetch_object($query);

//create a new random password

$password = substr(md5(uniqid(rand(),1)),3,10);
$pass = md5($password); //encrypted version for database entry

//send email
$to = "$email";
$subject = "Account Details Recovery";
$body = "Hi $r->username, nn you or someone else have requested your account details. nn Here is your account information please keep this as you may need this at a later stage. nnYour username is $r->username nn your password is $password nn Your password has been reset please login and change your password to something more rememberable.nn Regards Site Admin";
$additionalheaders = "From: <acheimeudoc@gmail.com>rn";
$additionalheaders .= "Reply-To: acheimeudoc@gmail.com";
mail($to, $subject, $body, $additionalheaders);

//update database
$sql = mysql_query("UPDATE formulario SET senha='$pass' WHERE email = '$email'")or die (mysql_error());



}// close errors
}// close if form sent



?>