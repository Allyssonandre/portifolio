<DOCTYPE HTML>
<?php
session_start();
if(!$_SESSION['email']){
	header('Location:index.html');
}else {
     }          
?>
<?php
include_once('Api/conexao.php');

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
								<li><a href="#sobre" id="top-link" class="skel-layers-ignoreHref"><span class="icon-users">Quem Somos</span></a></li>
								<li><a href="#perda" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon-frustrated2">Registra Doc. Perdido(os)</span></a></li>
								<li><a href="#achado" id="achado-link" class="skel-layers-ignoreHref"><span class="icon-happy2">Registra Doc. achado(os).</span></a></li>
								<li><a href="#busca" id="busca-link" class="skel-layers-ignoreHref"><span class="icon-search">Pesquisa Doc. achado(os)</span></a></li>
								<li><a href="#cliente" id="cliente-link" class="skel-layers-ignoreHref"><span class="icon-users">Pesquisa por clientes que perderam documentos</span></a></li>
								<li><a href="#planos" id="planos-link" class="skel-layers-ignoreHref"><span class="icon-briefcase">Planos</span></a></li>
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
							<b class="icon-earth">&nbsp;Parnamirim</b> - &nbsp;<?php echo date('d/m/y')?>
							<br>
                             <a href="editaUsuario.php"><button>Edite seus dados</button></a>  
                             <br> 							
                             <?php
                                print "<b style='color:green;'>SEJA BEM VINDO(a)</b>&nbsp;&nbsp&nbsp;".$_SESSION['email'];
                              ?>
                              <hr>
							<header>
							
							
								<h2>AMD|AcheiMeuDoc </h2><br>
							

							</header>

							<p>Nosso trabalho se baseia no código civil que está explicado nos artigos a baixo.A <em style="color: black;">CC - Lei nº 10.406 de 10 de Janeiro de 2002 do artigo 1233 do Código Civil &nbsp;<a href="https://www.jusbrasil.com.br/topicos/10652936/artigo-1233-da-lei-n-10406-de-10-de-janeiro-de-2002" target="_blank"><b style="font-weight: bold;color: black;">aqui</b></a></em> estabelece que “Quem quer que ache coisa alheia perdida há de restituí-la ao dono ou legítimo possuidor”. O AMD|AcheiMeuDoc Tem como objetivo oferecer uma ferramenta de ajuda, e por meio dela encontrar pessoas, documentos e Objetos, para que pessoas voltem ao convívio familiar, Para que possa encontrar documentos perdidos, uma vez perdidos pode gerar grandes transtornos Como exemplo tem os estelionatários que poderão usar seus documentos de varias formas que poderá te prejudicar. Porém nossa meta é procurar objetos que você julga importante, o nosso trabalho é te ajudar.
							E para sua segurança terá que ser feito um simples cadastro que será gerado uma senha e login,  para que você usuário possa ter acesso as informações de forma segura.
                    		</p>
							<div class="row">
								<li style="list-style: none;"><a style="text-decoration: none;color: blue;" href="#planos" id="planos-link" class="skel-layers-ignoreHref"><span class="icon-briefcase">&nbsp;Veja nossos planos.</span></a></li>
								
						</div>
					</section>

				<!-- About Me -->
					<section id="about" class="three">

						<div class="container">

							<header>
								<h1>Quem somos</h1>
							</header>

							

							<p>
							Somos um portal de perdidos e achados que visa facilitar o encontro de documentos 
							perdidos, pessoas e objetos por meio de divulgação em nosso portal, os documentos 
							serão feitos de forma diferente a busca será feita por nome em uma área especifica
							de busca, e procurar pessoas perdidas também fará parte dos nossos serviços no portal
							com fotos e algumas informações para facilitar o encontro da mesma de forma rápida e segura.</p>
							<header>
								<h1>Visão</h1>
							</header>
							<p>
							  Tentar evitar qualquer tipo de prejuízo que possa ter uma pessoa que perdeu seus 
							  documentos, para que haja uma forma rápida sem prejuízos futuros, estamos dispostos
							  a ajudar, a final, todo documento só poderá ser usado por seu verdadeiro dono de forma
							  que se possa evitar fraudes a você usuário e a terceiros.
							</p>
							<header>
								<h1>Missão</h1>
							</header>
							<p>
							  Facilitar por meio de divulgação documentos perdidos, objetos e pessoas visando diminuir 
							  os custos e tempo, uma segunda via de documentos demanda muito tempo em filas para reaver
							  seus documentos BO e etc..., encontrar objetos também fará parte dos nossos serviços, ate 
							  mesmo encontrar pessoas desaparecidas por meio de fotos e características marcantes para 
							  facilitar sua localização.
							</p>
							<header>
								<h1>Valores</h1>
							</header>
							<p>
							  Ajudar sempre todas as pessoas que estão a procura aquilo que julgam ser importantes para 
							  si, não importa o que seja, pessoas, documentos e objetos, vamos te ajudar para diminuir a 
							  sua angústia, o mais importante é fazer com que você seja ouvido e que possamos por meio deste
							  canal sermos ouvidos, pois a partir do momento que você nos procura o seu problema é o nosso 
							  problema também, e tenha certeza, você será ajudado de todas as formas possíveis, pois não importa
							  se é seu tem que estar com você. 
							</p>
							

						</div>
					</section>

				<!-- CADASTRO DE PERDA DE DOCUMENTAÇÃO -->
					<section id="perda" class="four">
						<div class="container">

							<header>
								<h1><span class="icon-frustrated2">&nbsp;Registra documento(os) perdido(os)</span></h1>
							</header>

							<p>Faça aqui seus registros.</p>

						<form method="post" action="" class="formulando">
							<div class="row">
							   <div class="6u 12u$(mobile)">
                                <span class="icon-user-tie">Nome</span>
                                <br>
                               	   <input type="text" name="nome" placeholder="Nome Completo" />
							   </div>
							  <div class="6u$ 12u$(mobile)">
                                 <span class="icon-phone">Telefone</span>
                                 <br>
									<input type="text" name="telefone" placeholder="Formato - (84)999999999" required title="Somente com números, pelo formato indicado" />
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
									<input type="text" name="endereco" placeholder= "Av,Rua, Trav" />
							  </div><br>
							<div class="12u$(mobile)">
                                 <span class="icon-home">&nbsp;Bairro</span>
                                 <br>
									<input type="text" name="bairro" placeholder= "Bairro" />
							  </div><br>
							   <br>
							
						<div class="row">      
                          <span><b>Motivo da Ocorrência?</b></span>

						   <span><b>Roubo</b></span>
							<label>
							  <input type="radio" name="perda" required value="roubo">
						    </label>
							<span><b>Perda</b></span> 
							<label>
							  <input type="radio" required name="perda" value="perda">
						    </label> <br> <br><br>
							<span><b>Receber documentação aonde?</b></span> 
							<span><b>Delegacia (credenciada)?</b></span>
							<label>
							  <input  type="radio" name="receber" required  value="delegacia">
							</label>
							<span><b>AMD|AcheiMeuDoc ?</b></span>
							<label>
							 <input type="radio" name="receber" required  value="pessoalmente">
							</label> <br>
							
                        </div><br> 
                        <div class="6u$">
                        	<span class="icon-clipboard">&nbsp;Descrição dos documentos Perdidos</span>
                        </div><br>
                        <div class="12u$">
                        	
							<textarea name="descricao"  cols="30" rows="7" placeholder="Descreva detalhadamente os documentos perdidos." required></textarea>
                        </div> 
                        <div class="row">
                        	<span><b>Marque a situação abaixo.</b></span> <br>
                        	<span><b>Procurando(<b style="font-weight: bold;">Obrigatório</b>)</b></span>
                        	<label>
                        		<input type="radio" name="situacao" required  value="Procurando">
                        	</label>
                        	<span>
                        	
                        	
                        	<b>se houve recompensa(opcional) marque esta caixa.</b>&rarr;
                                 <input type="radio" name="escolha" value="Pago recompensar">

                            </span>                        	
                        </div>
                        <div class="row">
                        	<span><b>Valor:</b></span>
                        </div>
                        <div class="12u$">
                        	<textarea name="recompensar" id="" cols="30" rows="5" placeholder="exemplo: R$00,00"></textarea>
                        </div>
						<br>
							<div class="12u$">
								<input type="submit" value="Envia" />
							</div>
								<div class="ver">
				                    
				                </div>	
								<script>
				                    $(function(){
				                        $('.formulando').submit(function(){
				                            $.ajax({
				                                url:'Api/perda.php',
				                                type:'post',
				                                data:$('.formulando').serialize(),
				                                success:function(data){
				                                    $('.ver').html(data);
				                                    $('.formulando')[0].reset();
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
			
				        <section id="achado" class="four">
						<div class="container" id="achou" >

							<header>
								<h1><span class="icon-happy2" >&nbsp;Registra documento(os) achado(os)</span></h1>
							</header>

							<p><span class="icon-mail">&nbsp;acheimeudoc@gmail.com.</span></p>
                            <!-- FORMULÁRIO PARA REGISTRO DE DOCUMENTOS ACHADOS-->
							<form method="post" action="" class="formula">
							   <div class="row">
								 <div class="6u 12u$(mobile)">
									<span class="icon-user-check" >&nbsp;Nome(Dono da documentação)</span>
									<br>
									<input type="text" name="nome"  placeholder="Nome(Dono da documentação)" required />
									<p style="font-size: 15px;font-weight: bold;"><strong>Por favor coloque o nome completo, para facilita a localização.</strong></p>
							     </div>
									<div class="6u 12u$(mobile)">
                                     <span class="icon-phone" >&nbsp;Telefone(Quem achou)</span>
                                     <br>
									<input type="text" name="telefone" placeholder="(84)999999999" title="Somente com números, pelo formato indicado" />
                                    <p style="font-size: 15px;font-weight: bold;"><strong>Somente com números, pelo formato indicado-(84)999999999</strong></p>
								   </div>
									<div class="12u$">
                                    <span class="icon-mail">&nbsp;Email(Quem achou)</span>
                                    <br>
									<input type="text" name="email" placeholder="fulano@fulano.com-(Quem achou)" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Indique formato de email" />
                                    <p style="font-size: 15px;font-weight: bold;"><strong>Indique formato de email ,fulano@fulano.com</strong> </p>
								   </div>
								    <div class="12u$">
								    <span class="icon-user-tie">&nbsp;Seu Nome(Quem achou)</span>
								    <br>
								    <input type="text" name="achou" placeholder="Quem achou?" required >
								    <p style="font-size: 15px;font-weight: bold;"><strong>Por favor coloque o nome completo, para facilita a sua localização.</strong></p>
								    </div>
                                    <div class="6u$">
								    <span class="icon-clipboard">&nbsp;Descrição dos documentos encontrados:</span></div>
								    <div class="12u$">
								    <textarea name="descricao" id="descricao" cols="30" rows="7" placeholder="Descreva detalhadamento os documentos achados." required>
								    	
								    </textarea>

								    </div>
									<div class="row">
                                     <span><b>Marque a situação abaixo.</b></span> <br> &nbsp;
                                     <span><b>Encontrado(<b style="font-weight: bold;">Obrigatório</b>)</b></span>
                                     <label>
                                     	<input type="radio" name="situacao" required  value="Sua documentação foi achada, entre em contato com o AMD|AcheiMeuDoc pelo email - acheimeudoc@gmail.com">
                                     </label>
								    </div>
									
									<div class="12u$">
										<input type="submit" value="Enviar" />
									</div>
								</div>
								<div class="mostrando">
                    
						                </div>	
										<script>
						                    $(function(){
						                        $('.formula').submit(function(){
						                            $.ajax({
						                                url:'Api/achei.php',
						                                type:'post',
						                                data:$('.formula').serialize(),
						                                success:function(data){
						                                    $('.mostrando').html(data);
						                                    $('.formula')[0].reset();
						                                }
						                            });
						                            return false;
						                        });
						                    });
						                </script>	
							</form>
						<!-- FIM DO FORMULÁRIO DE DOCUMENTOS ACHADOS -->
						</div>
                    </section>
						<br>
						<hr>
                        
						<div class="container" id="adesao">
                            
							<header>
								<h1></h1>
								<h1></h1>
							</header>

								<h1></h1>
							</header>
							
							<header>
								<h1></h1>
							</header>
							<header>
								<h1></h1>
							</header>
						
                              <hr>
						</div>
                         
						 <br>&nbsp;
						<!-- /header -->
						<!-- CAIXA DE BUSCA DE PESSOAS QUE TIVERAM SEUS DOCUMENTOS ACHADOS(script) -->
				         <div class="container" id="busca">

							<header>
								<h1><span class="icon-search">&nbsp;Pesquisa documento(os) Achado(os)</span></h1>
							</header>

							<p><strong><b>Pesquisa por clientes que tiveram documento(os) achado(os)</b></strong></p>
							<hr>
							<p>* Faça a busca pelo seu <b>nome completo</b>, Indicado na sua documentação, obedecendo a ordem de registro no portal.
							Se porventura sua documentação foi achada entre em contato urgente em: <strong><span class="icon-mail">&nbsp;acheimeudoc@gmail.com</span></strong>.</p>
                            <!-- FORMULARIO DE BUSCA DE PESSOAS QUE TIVERAM SEUS DOCUMENTOS ACHADOS -->
							<form method="post" action="">
								<div class="row">
								  <div class="12u$">
                                    <span class="icon-search">&nbsp;Pesquisar</span><br><br>
									<input type="text"  name="pesquisa" id="pesquisa" placeholder="Dono(a) da Documentação-Nome completo" required autofocus/>
								  </div>
								  
									
									<div class="12u$">
										<input type="reset"  value="Corrigi" />
									</div>
								</div>
							</form>
                              <ul class="resultado">
					
					          </ul>
					        <!-- FIM DA TAG -->  
					</div> <br>&nbsp;
					<hr>&nbsp;
					<div class="container" id="cliente">

							<header>
								<h1><span class="icon-search">&nbsp;<b>Pesquisa por clientes que perderam documentos</b></span></h1><br>
								<span>Faça a busca pelo nome completo, Indicado na documentação.</span>
							</header>
							<!-- FORMULÁRIO DE BUSCA DE PESSOAS QUE PERDERAM SEUS DOCUMENTOS -->	
							<form method="post" action="">
								<div class="row">
								  <div class="12u$">
                                    <span class="icon-search">&nbsp;Pesquisar <br><br>
                                    </span>
									<input type="text" name="filtro" id="buscando" placeholder="Nome Completo(dono)" required autofocus>
								  </div>
								  
									<!-- RESERTA BUSCA -->
									<div class="12u$">
										<input type="reset"  value="Corrigi" />
									</div>
									<!-- FIM -->
								</div>
							</form>
                              <ul class="ver">
					
					          </ul>
					         <!-- FIM --> 
					</div>

                    	<hr>&nbsp;				
                       <div class="container" id="planos">
                        <header>
						    <h1><span class="icon-briefcase"> Confira Nossa taxa de serviços.</span></h1>
						</header> 
				         <div class="row" id="planos">
								<div class="4u 12u$(mobile)">
									<article class="item" style="background-color:  rgba(3, 2, 9, 0.1);">
										<a href="#" class="image fit"><img src="icons/CPF_Preto.png" alt=""  style="width: 50%;padding: 0;padding: auto;margin-left: 27%;"/></a>
										<header>
											<h4>CPF</h4>
											<p>R$ 5,OO</p> 
										</header>
									</article>
									<article class="item" style="background-color:  rgba(3, 2, 9, 0.1);">
										<a href="#" class="image fit"><img src="icons/Passaporte_Preto.png" alt="" style="width: 50%;padding: 0;padding: auto;margin-left: 27%;"/></a>
										<header>
											<h4>PASSAPORTE BRASILEIRO</h4>
											<p>R$ 150,00</p>
										</header>
									</article>
								</div>
								<div class="4u 12u$(mobile)">
									<article class="item" style="background-color:  rgba(3, 2, 9, 0.1);">
										<a href="#" class="image fit"><img src="icons/Carteira_de_Trabalho_2.png" alt="" style="width: 50%;padding: 0;padding: auto;margin-left: 27%;"/></a>
										<header>
											<h4>CARTEIRA DE TRABALHO</h4>
											<p>R$ 30,00</p> 
										</header>
									</article>
									<article class="item" style="background-color:  rgba(3, 2, 9, 0.1);">
										<a href="#" class="image fit"><img src="icons/Carteira_de_Motorista_2.png" alt="" style="width: 50%;padding: 0;padding: auto;margin-left: 27%;"" /></a>
										<header>
											<h4>CNH</h4>
											<p>R$ 80,00</p>
										</header>
									</article>
								</div>
								<div class="4u$ 12u$(mobile)">
									<article class="item" style="background-color:  rgba(3, 2, 9, 0.1);">
										<a href="#" class="image fit"><img src="icons/RG_Preto.png" alt="" style="width: 50%;padding: 0;padding: auto;margin-left: 27%;"/></a>
										<header>
											<h4>IDENTIDADE</h4>
											<p>R$ 15,00</p>
										</header>
									</article>
									<article class="item" style="background-color:  rgba(3, 2, 9, 0.1);">
										<a href="#" class="image fit"><img src="icons/Certidão_de_Nascimento_Preto.png" alt="" style="width:50%;padding: 0;padding: auto;margin-left: 27%;"/></a>
										<header>
											<h4>CERTIDÃO DE NASCIMENTO</h4>
											<p>R$ 30,00</p> 
										</header>
									</article>

								</div>


							</div> <br>
							<div class="row" id="planos">
								<div class="4u 12u$(mobile)">
									<article class="item" style="background-color:  rgba(3, 2, 9, 0.1);">
										<a href="#" class="image fit"><img src="icons/Certidão_de_Casamento2.png" alt=""  style="width: 50%;padding: 0;padding: auto;margin-left: 27%;"/></a>
										<header>
											<h4>CERTIDÃO DE CASAMENTO</h4>
											<p>R$ 30,OO</p> 
										</header>
									</article>
									<article class="item" style="background-color:  rgba(3, 2, 9, 0.1);">
										<a href="#" class="image fit"><img src="icons/Passaporte_Preto.png" alt="" style="width: 50%;padding: 0;padding: auto;margin-left: 27%;"/></a>
										<header>
											<h4>PASSAPORTE DE ESTRANGEIRO</h4>
											<p>R$ 300,00</p>
										</header>
									</article>
								</div>
								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit" style="background-color:  rgba(3, 2, 9, 0.1);"><img src="icons/Cartão_de_Crédito_Preto.png" alt="" style="width: 50%;padding: 0;padding: auto;margin-left: 27%;"/></a>
										<header>
											<h4>CARTÃO DE CREDITO</h4>
											<p>R$ 5,00</p> 
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit" style="background-color:  rgba(3, 2, 9, 0.1);"><img src="icons/Carteira_de_Estudante_2.png" alt="" style="width: 50%;padding: 0;padding: auto;margin-left: 27%;"" /></a>
										<header>
											<h4>CARTEIRA DE ESTUDANTE</h4>
											<p>R$ 8,00</p>
										</header>
									</article>
								</div>
								<div class="4u$ 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit" style="background-color:  rgba(3, 2, 9, 0.1);"><img src="icons/Titulo_Eleitor_Preto.png" alt="" style="width: 50%;padding: 0;padding: auto;margin-left: 27%;"/></a>
										<header>
											<h4>TITULO DE ELEITOR</h4>
											<p>R$ 15,00</p>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit" style="background-color:  rgba(3, 2, 9, 0.1);"><img src="icons/Reservista_Preto.png" alt="" style="width:50%;padding: 0;padding: auto;margin-left: 27%;"/></a>
										<header>
											<h4>RESERVISTA</h4>
											<p>R$ 10,00</p> 
										</header>
									</article>

								</div>
                                  <hr>
                          <div>
                          	<h1><span class="icon-briefcase">&nbsp;Recompensar e taxas.</span></h1>
							<b>AcheiMeuDoc</b> trabalha por meio de recompensas e taxas, sendo que a recompensa é opcional, é uma forma de incentivar as pessoas a cadastrar uma perda em nosso sistema, é de total responsabilidade do usuário oferecer a recompensa, o site apenas cobra uma taxa pelo serviço, sendo distintos os valores, a taxa é pelo serviço que o site oferece, e a recompensa é oferecida pelo usuário que poderá oferecer ou não,  a recompensa poderá ser divida com o site se o mesmo chegar ao dobro da taxa de serviço ou seja se as taxas deram um valor de R$ 100 reais e foi oferecido uma recompensa de R$ 200 reais, R$ 100 reais é para o site e R$ 100 é para o colaborador do achado, sendo assim o usuário não precisa pagar as taxas de serviço, 
                            OBS: a regra serve para valores superiores aos mencionados e aplica se a regra da divisão de 50% 50%. <br>
						</div>
						<div>
							<p><strong style="color:green;">Pagamento ao colaborador</strong> <br>
                            </p>
                            o pagamento será realizado após a entrega dos documentos ou bens se (houver recompensa), caso haja a recompensa será realizada por meio de depósito, transferência bancária ou presencial, neste caso o colaborador terá que buscar o pagamento em local determinado pelos colaboradores do site. <br>
						</div>
                       <div><p><strong style="color: green;">Pagamento das taxas de serviço</strong></p>
                          o pagamento das taxas de serviço será realizado após a confirmação da localização dos documentos ou bens, será enviado um boleto para o usuário que efetuará o pagamento, e assim que for constatado o pagamento entraremos em contato com o usuário imediatamente para enviar a localização  do que procura, é de total responsabilidade do usuário o resgate dos documentos ou bens, como não guardamos, não é possível entregar, apenas fazemos a ponte entre quem perdeu e achou. <br>
                       </div>
                       <div>
                       	<p><strong style="color: green;">Recompensa</strong></p>
                       	  a recompensa como já foi dito é opcional, mas orientamos que seja oferecida, pois é um incentivo para que as pessoas fiquem mais suscetíveis a procurar o dono do documento ou bem, como já foi mencionado a recompensa poderá ser dividida com o site se preencher os requisitos que estabelecemos anteriormente. <br>
                       </div>
                       <div>
                       	<p><strong style="color: green;">Resgate dos documentos</strong></p>
                       	 só poderá ser feito pelo dono ou por uma pessoa que portar uma procuração devidamente reconhecida por órgão competente, e todos os resgates só poderão ser feitos em uma delegacia de polícia para que pessoas não usem o serviço do site de má fé, pois o nosso maior objetivo é que os documentos voltem para as mãos dos seus donos com segurança. <br>

                       </div>
					</div> 
			</div>
		</div>&nbsp;
		<br>
		<br>	     		
								
                            
                             

							

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