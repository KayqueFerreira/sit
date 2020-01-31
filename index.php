<!DOCTYPE html>
<html  lang="pt-BR" class="no-js">
<?php 
require("conexao.php");?>
<?php
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo'<title>KF identidade visual WORK</title>';
 	$leituraid = mysqli_real_escape_string($concta, $_GET['id_formulario']);
	if(isset($_POST['Enviar'])){
		$nome      =  $_POST['nome'];
		$email     = $_POST['email'];
		$telefone  = $_POST['telefone'];
		$descricao = $_POST['descricao'];
		


$sql= mysqli_query( $concta,$BANCO = "INSERT INTO formulario(nome, email, telefone, descricao) VALUES ('$nome', '$email', '$telefone','$descricao')") or die  (mysqli_error());
		
		}

	
 ?>
 
 
	
		<link rel="stylesheet" href="CSS/estilo.css">
    
</head>
<body>


<header>
	<a href="index.php"><img class="perfil" src="perfil.png" alt="KF identidade visual WORK">
		</a>
	
   <nav class="top" >

		<ul>
			<center>
			<a href=""><h1>INÍCIO</h1></a>
			<a href=""><h1>SERVIÇOS</h1></a>
			<a href=""><h1>PORTFÓLIO</h1></a>
			<a href="orcamento.php"><h1>ORÇAMENTO</h1></a>
		</center>
		</ul>
  </nav>
		</center>
</header>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	<div class="oqueFazemos">	
			<center>
			<h1>O Que Fazemos</h1>
			<h3>Somos  especializado em criação de sites, criação de identidade visual. </h3>
			</center>
	</div>		
			
		<ul>
		
	<div class="Identidade"><a href=""><li>Identidade Visual</li> </a></div>
			<p>Construção de marcas,  identidade visual corporativa,<br /> manual de identidade visual, redesign e modernização<br /> de logotipos, logomarcas e símbolos. </p>
		</ul>
			
		
	</nav>
			
	<div class="DesignGráfico"> <a href=""><li>Design Gráfico</li> </a> </div>
	
		<ul>
	<div class="texto"><p>Criação de material institucional para empresas, design<br /> de folhetos e flyers, 				criação de cartões de visita.  </p>	</div>
		</ul>
	<div class="WebDesign">
		<center><a href=""><li>Web Design</li></a></center>

	<div class="texto2">
			<center><p>Desenvolvimento de sites com design<br /> surpreendente, sites responsivos (compatíveis com desktops, tablets e smartphones). </p></center></div>
</section>
<br />

<section class="meio">
	<center><h1>Entre em Contato</h1></center>
	<center><h1>(31) 9 8645-7875</h1></center>
	<center><h4>Rua Edith Mello Silva,308<br /> Bairro Nova Cintra <br />Belo Horizonte-MG <br />cep,30516050</h4></center>
					<br /><br /><br />
	<?php 
	echo '<center><form name="form" method="post" action="" enctype="multipart/form-data">
	<span>Nome Completo:</span><br />
    <label>
	<input type="text" name="nome"value="'.$listar['nome'].'" style="width: 500px;height: 30px;border-radius: 10px;outline: none;"/><br />
    </label>
	<span>Email:</span><br />
      <label>
	<input type="text" name="email"value=""style="width: 500px;height: 30px;border-radius: 10px;outline: none;"/><br />
      </label>
	<span>Telefone:</span><br />
      <label>
	<input type="text" name="telefone"value=""style="width: 500px;height: 30px;border-radius: 10px;outline: none;"/><br />
    </label>
	<span>Descreva sua necessidade:</span><br />
      <label>
	<textarea name = "descricao"value=""style="width: 500px;height: 100px; border-radius: 10px;outline: none;"> </textarea><br />
    </label>
	<input type="submit" name= "Enviar" value="Enviar  Mensagem"class="enviar"  /><br /> 
	</center>
	</form><br /> <br /> '
	?>
</section>

<footer>
	<div class="rodape">
<center><h4>ENTRE EM CONTATO</h4>
<h5>(31) 9 8645-7875<a href=""><img class="whats" src="whatsapp-logo-1.png" alt="whatsapp"></a></h5>
<h6>Rua Edith Mello Silva,308 Bairro Nova Cintra Belo Horizonte-MG cep,30516050</h6></div></center>

</footer>



</body>
</html>
<?php
/*$to = "kaiquethee@gmail.com";
		$subject = "programação";
		$body = "nome:".$nome. "email:".$email."telefone".$telefone."descricao".$descricao;
		$header = "from;servicografico.com"."\r\n".
		"reply-to:".$email."\r\n".
		"x=mailer:PHP/".phpversion();
		if(mail($to,$subject,$body,$header)){
			echo ("email evinado com sucesso!");
			}else{
				echo ("email nao enviado");
				}*/
				?>