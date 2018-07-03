<DOCTYPE HTML>
<?php
include_once('Api/conexao.php');
?>
<?php
session_start();
if(!$_SESSION['emailimei']){
	header('Location:index.html');
}else {
     }
            
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
							<h1 id="title">Cadastrar IMEI</h1>
							<p style="color: white;">AcheiMeuDoc.</p>
						</div>
											
							<!-- Nav -->
						<nav id="nav">
							
							
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon-earth">Empresa</span></a></li>
								<li><a href="#perda" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon-pencil2">Registro de IMEI</span></a></li>
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
					    
				<!-- Portfolio -->
					<section id="sobre" class="two">
						<b class="icon-earth">&nbsp;Parnamirim</b> - &nbsp;<?php echo date('d/m/y')?>

						<div class="container">
							                             <?php
                                print "<b class='icon-pencil2' style='color:green;'>&nbsp;SEJA BEM VINDO(a), cadastre seu IMEI </b>&nbsp;&nbsp&nbsp;".$_SESSION['emailimei'];
                              ?>
                              <hr>
							<header>
								<span class="icon-briefcase"></span><h1>AMD|AcheiMeuDoc (IMEI) </h1>
							</header>

						<p>Antes de se cadastra leia atentamente os passos a seguir.</p>

							
                      <!--  Area possivel para propagandas --> 
					<div class="row" id="imei">
                <p>
                    <span class="icon-paste">&nbsp;REGISTRO DE CÓDIGO IMEI</span>
                    
                     <br>
                <b style="font-weight: bolder;">O que é o código IMEI e como você pode usá-lo para bloquear e desbloquear seu celular. Todo celular tem um registro digital que o torna único e o protege. Trata-se de um número de 15 dígitos que o identifica, conhecido como IMEI (International Mobile Equipment Identity, ou identidade internacional de equipamento móvel).</b><br>
                Com isso o nosso portal traz para nossos colaboradores uma ferramenta prática para registro de Imei, que será futuramente usado para analise de perda/ou roubo. Sendo o simples registro antecipado uma segurança para o cliente, pois antecipara constragimentos.podendo o usuário registra mais de um imei, vinculado a seu celula. <br><br>
                <span><b class="icon-briefcase">&nbsp;AcheiMeuDoc</b></span>
                
                 <br>
                <b style="font-weight: bold;">"Esta ferramenta tem a finalidade de dar suporte a pessoas que foram vitimas de roubo, sendo que através do cpf será vinculado seu cpf, e assim reaverem seu pertence. " </b><br>
                Por AcheiMeuDoc.<span class="icon-pencil2"></span>
                <br><br>
                Veja a seguir como consulta seu imei em seu celular:<br>
                1) procurar na caixa do celular;<br>
                2) procurar em um adesivo que fica por trás da bateria; ou <br>
                3) digitar <b style="font-weight: bold;">*#06#</b> no celular e apertar a tecla para ligar. <br>
                Atenção: Celulares que utilizam mais de um SIM Card possuem um IMEI para cada chip, sendo necessário verificar cada um dos IMEIs. <br>
               
                </p>

            </div>		
					</section>

				<!-- About Me -->
					
				<!-- CADASTRO DE PERDA DE DOCUMENTAÇÃO -->
					<section id="perda" class="four">
						<div class="container">

							<header>
								<h1><span class="icon-paste">&nbsp;Cadastro de IMEI´S</span></h1>
							</header>
						<form method="post" action="" class="form" enctype="multipart/form-data">
							<div class="row">
							   <div class="6u 12u$(mobile)">
                                <span class="icon-user-tie">Nome</span>
                                <br>
                               	   <input type="text" name="donoimei" placeholder="Nome Completo" />
							   </div>
							  <div class="6u$ 12u$(mobile)">
                                 <span class="icon-phone">Telefone</span>
                                 <br>
									<input type="text" name="telefone" placeholder="Formato - (84)999999999" required title="Somente com números, pelo formato indicado" />
							  </div><br>
								<div class="12u$">
                                 <span class="icon-paste">&nbsp;cpf</span>
                                 <br>
									<input type="text" name="cpf" placeholder="Onze números - xxxxxxxxx-xx" required title="Somente com números, pelo formato indicado" />
							  </div>
								<div class="12u$">
								  <span class="icon-mail">&nbsp;E-mail</span>
								  <br>
									 <input type="text" name="email" placeholder="fulano@fulano.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Indique formato de email" /> <br>
								  <p><span class="icon-home2">&nbsp;Localidade:</span></p>
									<select   required name="cidade" >
								<option value="-----------">--------------</option>
								<option value="Acari">Acari</option>
								<option value="Afonso Bezerra">Afonso Bezerra</option>
								<option value="Agua Nova">Água Nova</option>
								<option value="Alexandria">Alexandria</option>
								<option value="Almino Afonso">Almino Afonso	</option>
								<option value="Alto do Rodrigues">Alto do Rodrigues</option>
								<option value="Angicos">Angicos</option>
								<option value="Antônio Martins">Antônio Martins</option>
								<option value="Apodi">Apodi</option>
								<option value="Areia Branca">Areia Branca</option>
								<option value="Arez">Arez</option>
								<option value="Assu">Assu</option>
								<option value="Baia Formosa">Baía Formosa</option>
								<option value="Baraúna">Baraúna</option>
								<option value="Barcelona">Barcelona</option>
								<option value="Bento Fernandes">Bento Fernandes</option>
								<option value="Boa Saúde">Boa Saúde</option>
								<option value="Bodó">Bodó</option>
								<option value="Bom Jesus">Bom Jesus</option>
								<option value="Brejinho">Brejinho</option>
								<option value="Caicara do Norte">Caiçara do Norte</option>
								<option value="Caicara do Rio do Vento">Caiçara do Rio do Vento</option>
								<option value="Caicó">Caicó</option>
								<option value="Campo Grande">Campo Grande</option>
								<option value="Campo Redondo">Campo Redondo</option>
								<option value="Canguaretama">Canguaretama</option>
								<option value="Caraúbas">Caraúbas</option>
								<option value="Carnauba dos Dantas">Carnaúba dos Dantas</option>
								<option value="Carnaubais">Carnaubais</option>
								<option value="Ceará Mirim">Ceará-Mirim</option>
								<option value="Cerro corá">Cerro Corá</option>
								<option value="Coronel Ezequiel">Coronel Ezequiel</option>
								<option value="Coronel João Pessoa">Coronel João Pessoa</option>
								<option value="cruzeta">Cruzeta</option>
								<option value="Currais Novos">Currais Novos</option>
								<option value="Doutor Severiano">Doutor Severiano</option>
								<option value="Encanto">Encanto</option>
								<option value="Equador">Equador</option>
								<option value="Espirito Santo">Espírito Santo</option>
								<option value="Extremoz">Extremoz</option>
								<option value="Felipe Guerra">Felipe Guerra</option>
								<option value="Fernando Pedroza">Fernando Pedroza</option>
								<option value="Florãnia">Florânia</option>
								<option value="Francisco Dantas">Francisco Dantas</option>
								<option value="Frutuoso Gomes">Frutuoso Gomes</option>
								<option value="Galinhos">Galinhos</option>
								<option value="Goianinha">Goianinha</option>
								<option value="Governador Dix-sept Rosado">Governador Dix-Sept Rosado</option>
								<option value="Grossos">Grossos</option>
								<option value="Guamaré">Guamaré</option>
								<option value="Ielmo Marinho">Ielmo Marinho</option>
								<option value="Ipanguaçu">Ipanguaçu</option>
								<option value="Ipueira">Ipueira</option>
								<option value="Itajá">Itajá</option>
								<option value="Itaú">Itaú</option>
								<option value="Jaçanã">Jaçanã</option>
								<option value="Jandaíra">Jandaíra</option>
								<option value="Janduís">Janduís</option>
								<option value="Japi">Japi</option>
								<option value="Jardim de Angicos">Jardim de Angicos</option>
								<option value="Jardim de Piranhas">Jardim de Piranhas</option>
								<option value="Jardim do seridó">Jardim do Seridó</option>
								<option value="João Cãmara">João Câmara</option>
								<option value="João Dias">João Dias</option>
								<option value="José da Penha">José da Penha</option>
								<option value="Jucurutu">Jucurutu</option>
								<option value="Jundiá">Jundiá</option>
								<option value="Lagoa d´Anta">Lagoa d'Anta</option>
								<option value="Lagoa de Pedras">Lagoa de Pedras</option>
								<option value="Lagoa de Velhos">Lagoa de Velhos</option>
								<option value="Lagoa Nova">Lagoa Nova</option>
								<option value="Lagoa Salgada">Lagoa Salgada</option>
								<option value="Lajes">Lajes</option>
								<option value="Lajes Pintadas">Lajes Pintadas</option>
								<option value="Lucrécia">Lucrécia</option>
								<option value="Luis Gomes">Luís Gomes</option>
								<option value="Macaiba">Macaíba</option>
								<option value="Macau">Macau</option>
								<option value="Major Sales">Major Sales</option>
								<option value="Marcelino Vieira">Marcelino Vieira</option>
								<option value="Martins">Martins</option>
								<option value="Maxaranguape">Maxaranguape</option>
								<option value="Messias Targino">Messias Targino</option>
								<option value="Montanhas">Montanhas</option>
								<option value="Monte Alegre">Monte Alegre</option>
								<option value="Monte das Gameleiras">Monte das Gameleiras</option>
								<option value="Mossoró">Mossoró</option>
								<option value="Natal">Natal</option>
								<option value="Nisia Floresta">Nísia Floresta</option>
								<option value="Nova Cruz">Nova Cruz</option>
								<option value="Olho d´Água doS Borges">Olho-d'Água do Borges</option>
								<option value="Parana">Paraná</option>
								<option value="Parau">Paraú</option>
								<option value="Parazinho">Parazinho</option>
								<option value="Parelhas">Parelhas</option>
								<option value="Parnamirim">Parnamirim</option>
								<option value="Passa e Fica">Passa-e-Fica</option>
								<option value="Passagem">Passagem</option>
								<option value="Patu">Patu</option>
								<option value="Pau dos Ferros">Pau dos Ferros</option>
								<option value="Pedra Grande">Pedra Grande</option>
								<option value="Pedra Preta">Pedra Preta</option>
								<option value="Pedro Avelino">Pedro Avelino</option>
								<option value="Pedro Velho">Pedro Velho</option>
								<option value="Pendências">Pendências</option>
								<option value="Pilões">Pilões</option>
								<option value="Poço Branco">Poço Branco</option>
								<option value="Portalegre">Portalegre</option>
								<option value="Porto do Mangue">Porto do Mangue</option>
								<option value="Pureza">Pureza</option>
								<option value="Rafael Fernandes">Rafael Fernandes</option>
								<option value="Rafael Godeiro">Rafael Godeiro</option>
								<option value="Riacho da Cruz">Riacho da Cruz</option>
								<option value="Riacho de Santana">Riacho de Santana</option>
								<option value="Riachuelo">Riachuelo</option>
								<option value="Rio do Fogo">Rio do Fogo</option>
								<option value="Rodolfo Fernandes">Rodolfo Fernandes</option>
								<option value="Ruy Barbosa">Ruy Barbosa</option>
								<option value="Santa Cruz">Santa Cruz</option>
								<option value="Santa Maria">Santa Maria</option>
								<option value="Santana do Matos">Santana do Matos</option>
								<option value="Santana do Seridó">Santana do Seridó</option>
								<option value="Santo Antônio">Santo Antônio</option>
								<option value="São Bento do Norte">São Bento do Norte</option>
								<option value="São Bento do Trairi">São Bento do Trairi</option>
								<option value="São Fernando">São Fernando</option>
								<option value="São Francisco do Oeste">	São Francisco do Oeste</option>
								<option value="São Gonçalo do Amarante">São Gonçalo do Amarante</option>
								<option value="São João do Sabugi">São João do Sabugi</option>
								<option value="São José de Mipibu">São José de Mipibu</option>
								<option value="São José do Campestre">São José do Campestre</option>
								<option value="São José do Seridó">São José do Seridó</option>
								<option value="São Miguel">São Miguel</option>
								<option value="São Miguel do Gostoso">São Miguel do Gostoso</option>
								<option value="São Paulo do Potengi">São Paulo do Potengi</option>
								<option value="São Pedro">São Pedro</option>
								<option value="São Rafael">São Rafael</option>
								<option value="São Tomé">São Tomé</option>
								<option value="Senador Elói de Souza">Senador Elói de Souza</option>
								<option value="senadorgeorginoavelino">	Senador Georgino Avelino</option>
								<option value="Serra Caiada">Serra Caiada</option>
								<option value="Serra de São Bento">Serra de São Bento</option>
								<option value="Serra do Mel">Serra do Mel</option>
								<option value="Serra Negra do Norte">Serra Negra do Norte</option>
								<option value="Serrinha">Serrinha</option>
								<option value="Serrinha dos Pintos">Serrinha dos Pintos</option>
								<option value="Severiano Melo">Severiano Melo</option>
								<option value="Sitio Novo">Sítio Novo</option>
								<option value="Taboleiro Grande">Taboleiro Grande</option>
								<option value="Taipu">Taipu</option>
								<option value="Tangará">Tangará</option>
								<option value="Tenente Ananias">Tenente Ananias</option>
								<option value="Tenentel Aurenti no Cruz">Tenente Laurentino Cruz</option>
								<option value="Tibau">Tibau</option>
								<option value="Tibau do Sul">Tibau do Sul</option>
								<option value="Timbaúba dos Batistas">Timbaúba dos Batistas</option>
								<option value="Touros">Touros</option>
								<option value="Triunfo Potiguar">Triunfo Potiguar</option>
								<option value="Umarizal">Umarizal</option>
								<option value="Upanema">Upanema</option>
								<option value="Várzea">Várzea</option>
								<option value="Venha-ver">Venha-Ver</option>
								<option value="Vera Cruz">Vera Cruz</option>
								<option value="Viçosa">Viçosa</option>
								<option value="Vila Flor">Vila Flor</option>
								
							</select> <br>
							 <div class="12u$(mobile)">
                                 <span class="icon-phone">&nbsp;Endereço</span>
                                 <br>
									<input type="text" name="endereco" placeholder= "Av,Rua, Trav......" />
							  </div><br>
							<div class="12u$(mobile)">
                                 <span class="icon-home">&nbsp;Bairro</span>
                                 <br>
									<input type="text" name="bairro" placeholder= "Bairro" />
							  </div><br>
							  <div class="6u$ 12u$(mobile)">
                            
						<div class="12u$(mobile)">
                            <span class="icon-paste">&nbsp;IMEI</span>
                            <br>
								<input type="text" name="numeroimei" placeholder="IMEI - xxxxxxxxxxxxxxx" required title="Somente com números, pelo formato indicado" />
							<p style="color: green;">* São 15 números.</p>
						</div>

						<br>	
						<div class="6u$ row">      
                          <b>Motivo do registro?</b>
						   <span>Roubo/Perda<span>  
						   	
						   		&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="perda"  value="roubo">
                                                        <br>
						   	<span>&nbsp;Prevenção</span>
							
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="previni" value="prevenindo">	
                        </div>
						
                        <br> 
                        <div class="12u$">
                        	<span class="icon-clipboard">&nbsp;Descrições adicionais</span>
                        </div><br>
                        <div class="12u$">
                        	
							<textarea name="descricao"  cols="30" rows="7" placeholder="Descreva motivo do registro." required></textarea>
                        </div> <br>
							<div class="12u$">
								<input type="submit" value="Envia" />
							</div>
				</div>	
				<div class="mostra">
                    
                </div>	
				<script>
                    $(function(){
                        $('.form').submit(function(){
                            $.ajax({
                                url:'Api/cadastroimei.php',
                                type:'post',
                                data:$('.form').serialize(),
                                success:function(data){
                                    $('.mostra').html(data);
                                    $('.form')[0].reset();
                                }
                            });
                            return false;
                        });
                    });
                </script>
					</form>
					<!-- FIM DO FORMULÁRIO DE PERDA DE DOCUMENTAÇÃO
					 -->
				</div> 
               </section>	
         </div><br>
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

			<script src="assets/js/perdeu.js"></script>
			<script src="assets/js/colaborador.js"></script>


			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>