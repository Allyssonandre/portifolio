<?php include('Api/conexao.php') ?> 
<?php   
if (isset($_POST["enviarPassword"]))
{
	// Gather the post data
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirma_senha"];

	// Use the same salt from the forgot_password.php file
	$salt = "498#2D83B631%3800EBD!801600D*7E3CC13";

	// Generate the reset key
	$resetkey = hash('sha512', $salt.$email);

	// Does the new reset key match the old one?
	if ($resetkey == $hash)
	{
		if ($password == $confirmpassword)
		{
			//has and secure the password
			$password = hash('sha512', $salt.$password);

			// Update the user's password
				$query = $link->prepare('UPDATE formulario SET senha = :password WHERE email = :email');
				$query->bindParam(':password', $password);
				$query->bindParam(':email', $email);
				$query->execute();
				$conn = null;
			echo '<script>$(document).ready(function(){
               swal("Beleza...","Sua Senha foi enviado com sucesso!","success");
               });</script>';
		}
		else
			echo "Your password's do not match.";
	}
	else
		echo "Your password reset key is invalid.";
}

?>
