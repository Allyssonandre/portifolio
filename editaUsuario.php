<DOCTYPE HTML>
<?php
session_start();
if(!$_SESSION['email']){
	header('Location:index.html');
}else {
     }          
?>
<?php 
require 'Api/conecta.php';  
 ?>
<?php 
    $id = $_SESSION['email'];
    $query = mysqli_query($link, "SELECT id, nome, telefone, email, senha, codigoverificador FROM formulario WHERE email='$id'");
    if (mysqli_num_rows($query)>=1) {
 	    $dado=mysqli_fetch_array($query);
 	       		
    }
    mysqli_close($link);
       
 ?>
<html>
	<head>
		<title>AMD|AcheiMeuDoc</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/fonts.css">
        <link rel="shortcut icon" href="images\marca.jpg" />
		<script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.cycle.all.js"></script> 
        <script src="assets/js/sweetAlert.js"></script>

		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		
	</head>
	<body>
    
            
 

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/logo.jpg" alt="logoAMD" style="border-radius: 50px;"/></span>
							<h1 id="title">AcheiMeuDoc</h1>
							<p style="color: white;">Seu documento com você.</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon-earth">Empresa</span></a></li>
								<li><a href="paginaprincipal.php" id="sair-link" class="skel-layers-ignoreHref"><span class="icon-user">Volte para sua área administrativa</span></a></li>
								<li><a href="sair.php" id="sair-link" class="skel-layers-ignoreHref"><span class="icon-unlocked">Sair</span></a></li>

                                							
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-instagram" title="Instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-facebook" title="Facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://api.whatsapp.com/send?phone=5584991815927&text=Olá%20meu%20amigo!" class="icon fa-whatsapp" target="_blank" title="whatsApp"><span class="label">whatsApp</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
				  <div><img src="images/marca.jpg" alt="" style="width: 100%;height: 270px;"></div>
					
					<section id="sobre" class="two">
						<div class="container">
							<b class="icon-earth">&nbsp;Parnamirim</b> - &nbsp;<?php echo date('d/m/y')?><br>
							
                             <?php
                                print "<b style='color:green;'>SEJA BEM VINDO(a)</b>&nbsp;&nbsp&nbsp;".$_SESSION['email'];
                              ?>
                              <hr>
							<header>
								<h1>AMD|AcheiMeuDoc </h1>
							
						</div>
					</section>


				<!-- About Me -->
					<section id="about" class="three">

						<div class="container">
							<form method="post" action="" class="formula">
						    <div class="row">
							   <div class="6u 12u$(mobile)">
                                <span class="icon-user-tie">Nome</span>
                                <br>
                               	   <input type="text" name="nome" id="user" value="<?=$dado['nome']?>" />

							   </div>
							  <div class="6u$ 12u$(mobile)">
                                 <span class="icon-phone">Telefone</span>
                                 <br>
									<input type="text" name="telefone" value="<?php echo $dado['telefone'];?>" />
							  </div>
								<div class="12u$">
								  <span class="icon-mail">&nbsp;E-mail</span>
								  <br>
									 <input type="text" name="email" value="<?php echo $dado['email'];?>" /> <br>
							    <div class="12u$(mobile)">
                                 <span class="icon-home">&nbsp;*Senha</span>
                                 <br>
									<input type="password" name="senha" value="<?php echo $dado['senha'];?>" />
									<b style="margin: 0;padding: 0;margin-right: 700px;">*Nova senha</b>&nbsp;
							
							  </div><br>
								  
							   
							<div class="12u$">
							<input type="submit" name="button" id="button" value="Altera dados"></button>
                                <input type="hidden" name="id" value="<?php echo $dado['id']; ?>" />
							</div>
								<div class="vejam">
				                    
				                </div>	
								<script>
				                    $(function(){
				                        $('.formula').submit(function(){
				                            $.ajax({
				                                url:'Api/editandoUsuario.php',
				                                type:'post',
				                                data:$('.formula').serialize(),
				                                success:function(data){
				                                    $('.vejam').html(data);
				                                   
				                                }
				                            });
				                            return false;
				                        });
				                    });
				                </script>
					</form>
				</div>
			</div>
			</section>

				<!-- CADASTRO DE PERDA DE DOCUMENTAÇÃO -->
					<section id="perda" class="four">
						<div class="container">

							
						</div> 
               		</section>
			
				     <section id="achado" class="four">
						<div class="container" id="achou" >

                     </section>
	
                       <div class="container" id="planos"> 
				         <div class="row" id="planos">
								
								
								
							</div> <br>
							<div class="row" id="planos">
								
					   </div> 
			       </div>
		        </div>
		<!-- Footer -->

			<div id="footer">

				
                 <!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-instagram" title="Instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							
							<li><a href="https://api.whatsapp.com/send?phone=5584991815927&text=Olá%20meu20amigo!" class="icon fa-whatsapp" target="_blank" title="whatsApp"><span class="label">whatsApp</span></a></li>
						</ul>
						<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; AMD|AcheiMeuDoc. Todos os direitos reservados.</li>
					</ul>
			</div>
          
		<!-- Scripts -->
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
		    <link rel="stylesheet" href="Api/clientes.php">

			


			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>