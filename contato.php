<?php 
	$contato = $empresa = $home = $parceiros = $solucoes = "";
	$contato = "active";

	require_once('includes/head.php');
	require_once('includes/topo.php');
	/*
	session_start();
	$mensagem = "";
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$request = md5( implode( $_POST ) );
		if(isset($_SESSION['last_request'] ) && $_SESSION['last_request']== $request ){
			$mensagem = "";
		}else{
			$_SESSION['last_request']  = $request;
	
			$nome 	    = $_POST['textNome'];
			$email      = $_POST['textEmail'];
			$mensagem	= nl2br($_POST['textTexto']);
			$corpoMSG = "<strong>Nome:</strong> $nome<br> <strong>Email:</strong> $email<br><br> <strong>Mensagem:</strong><br> $mensagem";
			
			require_once("./includes/phpmailer/class.smtp.php");
			require_once("./includes/phpmailer/class.phpmailer.php");
			
			$mail   = new PHPMailer();
			$mail->IsSMTP(); 
			$mail->Host = "smtp.anatomed.com.br"; 
			$mail->SMTPAuth = true;
			$mail->Username = 'roger@anatomed.com.br'; 
			$mail->Password = 'mozellinha';
			$mail->Port     = 587;
			$mail->From = "roger@anatomed.com.br";
			$mail->AddBCC("roger.mozella@gmail.com", "test");
			$mail->FromName = "AS TI Integradora";
			$mail->AddAddress("roger@anatomed.com.br", "AS TI Integradora");
			$mail->Subject = "Contato - $nome";
			$mail->MsgHTML($corpoMSG);

			if(!$mail->Send()){
				$mail_erro   = new PHPMailer();
				$mail_erro->IsSMTP();
				$mail_erro->Host = "smtp.anatomed.com.br";
				$mail_erro->SMTPAuth = true;
				$mail_erro->Username = 'roger@anatomed.com.br';
				$mail_erro->Password = 'mozellinha';
				$mail_erro->Port     = 587;
				$mail_erro->From = "roger@anatomed.com.br";
				$mail_erro->FromName = "AS TI Integradora";
				$mail_erro->AddAddress("roger.mozella@gmail.com", "Roger - desenvolvedor");
				$mail_erro->Subject = "Erro AS TI";
				$mail_erro->MsgHTML($mail->ErrorInfo);
				$mail_erro->Send();
				
				$mensagem = "Não conseguimos processar sua solicitação!";
			} else {
				$mensagem = "Email enviado com sucesso !";
			}
		}
	}*/
?>

	<div class='titulo'>
		<div class='container'>
			<h3>Contato</h3>
		</div>
	</div>
	<div class='container'>
		<div class='row'>
			<div class='col-sm-6'>
				<div class='row'>
					<div class='col-xs-12' style='text-align: center; font-weight: bolder; font-size: 16px;'>
						<b><? echo $mensagem; ?></b>
					</div>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2201.28684805086!2d-49.01727530879709!3d-21.891899649188627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf222464f8b927%3A0x4db5fa4bc4b8960f!2sAv.+Laemert+Garcia+dos+Santos%2C+950%2C+Iacanga+-+SP%2C+17180-000!5e0!3m2!1spt-BR!2sbr!4v1531922310811" width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class='col-sm-6'>
				<div class='contato text-center'>
				Av. Laemert Garcia dos Santos, 950 <br/>
				17.180-000, Centro, Iacanga - SP <br/>
				<img src='./includes/imagens/icons/phone.png' width='25px' /> - (14) 3294-3222 &nbsp;&nbsp;
				<img src='./includes/imagens/icons/whatsapp.png' width='25px' /> - (14) 99621-1414 </br>
				astiintegradora@astiintegradora.com.br</br>
				</div><br/>
				<form id="formContato" name="formContato" method="POST" action="contato.php" data-toggle="validator" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label id="lblNome" for="textNome" class="control-label">Nome</label>						
						<input id="textNome" name="textNome" class="form-control" placeholder="Digite seu Nome..." type="text" required>
					</div>
					<div class="form-group">
						<label id="lblEmail" for="textEmail" class="control-label">Email</label>
						<input id="textEmail" name="textEmail" class="form-control" placeholder="Digite seu E-mail" type="email" data-error="Por favor, informe um e-mail correto." required onblur="validacaoEmail()">
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<label id="lblTexto" for="textTexto" class="control-label">Texto</label>
						<textarea class="form-control" id="textTexto" name="textTexto" rows="3" required></textarea>
					</div>
					<div class="form-group text-center">
						<input type="button" id='btnEnviar' name='btnEnviar' class="btn btn-primary" value="Enviar">
						<input type="reset" id='btnCancelar' name='btnCancelar' class="btn btn-danger" value="Cancelar">
					</div>
				</form>
			</div>
			
		</div>	
	</div>
	
	<div class='row' style='margin-bottom: 60px;'></div>

<?php
	require_once('includes/rodape.php');
?>
	<script>
		function validarCampos(campos){
			var total = campos.length;
			for(var x=0; x<total; x++){
				if($("#text"+campos[x]).val().trim() == ""){
					$("#lbl"+campos[x]).text(campos[x]+" - campo obrigatório");
					$("#lbl"+campos[x]).css('color', 'red');
					$("#text"+campos[x]).focus();
					return false;
				}else{
					$("#lbl"+campos[x]).text(campos[x]);
					$("#lbl"+campos[x]).css('color', 'black');
					
					if(campos[x] == "Email")
						if(!validacaoEmail())
							return false;
				}				
			}
			return true;
		}
		
		function validacaoEmail() {
			
			var field = document.getElementById("textEmail");
			
			if($('#textEmail').val() == ""){
				$("#lblEmail").text("Email");
				$("#lblEmail").css('color', 'black');
				return false;
			}
			
			usuario = field.value.substring(0, field.value.indexOf("@"));
			dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

			if ((usuario.length >=1) &&
				(dominio.length >=3) && 
				(usuario.search("@")==-1) && 
				(dominio.search("@")==-1) &&
				(usuario.search(" ")==-1) && 
				(dominio.search(" ")==-1) &&
				(dominio.search(".")!=-1) &&      
				(dominio.indexOf(".") >=1)&& 
				(dominio.lastIndexOf(".") < dominio.length - 1)) {
					$("#lblEmail").text("Email");
					$("#lblEmail").css('color', 'black');
					return true;
			}else{
				$("#lblEmail").text("Email - digite um email correto");
				$("#lblEmail").css('color', 'red');
				return false;
			}
		}
		
		$(document).ready(function() {
			
			
			$('#btnEnviar').bind('click', function(){
				var campos = new Array ('Nome','Email','Texto');
				if(validarCampos(campos)){
					$("#formContato").submit();
				}
			});
		});
	</script>
<?php
	require_once('includes/fim.php');
?>