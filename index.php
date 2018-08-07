<?php 
	$faleconosco = $quemsomos = $home = $case = $solucoes = $clientes = "";
	$home = "active";
	
	require_once('includes/head.php');
	require_once('includes/topo.php');
?>
	<div class="row" style='margin: 0px;'>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li class="" data-target="#myCarousel" data-slide-to="1"></li>
				<li class="" data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">	
				<div class="item active"><img class="first-slide" src="includes/imagens/slide/slider1.jpg" alt="PedraPaulista"></div>
				<div class="item"><img class="second-slide" src="includes/imagens/slide/slider2.jpg" alt="PedraPaulista"></div>
				<div class="item"><img class="third-slide" src="includes/imagens/slide/slider3.jpg" alt="PedraPaulista"></div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Pr&oacute;ximo</span>
			</a>
		</div><!-- /.carousel -->
	</div>
	<div class='container'>
		<div class='col-sm-4 col-xs-12 text-center'>
			<br/><br/>
			<div class='img_home'>
				<img class="img-circle" src="includes/imagens/icons/callcenter.png" width="100" height="100" alt="Call Center" title="Call Center"><br/>
			</div>
			<div><br/>
				<b>CALL CENTER</b>
				<p>Uma central de atendimento &eacute; composta por estruturas f&iacute;sicas que tem por objetivo centralizar o recebimento de liga&ccedil;&otilde;es telef&ocirc;nicas.</p>
				<a class="btn btn-default" href="solucoes.php" role="button">Ver mais</a>
			</div>
		</div>
		<div class='col-sm-4 col-xs-12 text-center'>
			<br/><br/>
			<div class='img_home'>
				<img class="img-circle" src="includes/imagens/icons/pabx.jpg" width="100" height="100" alt="PABX" title="PABX"><br/>
			</div>
			<div><br/>
				<b>PABX</b>
				<p>Uma central telef&ocirc;nica onde s&atilde;o interligados as linhas externas da empresa podendo ser distribu&iacute;das em diversos ramais.</p>
				<a class="btn btn-default" href="solucoes.php" role="button">Ver mais</a>
			</div>
		</div>
		<div class='col-sm-4 col-xs-12 text-center'>
			<br/><br/>
			<div class='img_home'>
				<img class="img-circle" src="includes/imagens/icons/voip.png" width="100" height="100" alt="VoIP" title="VoIP">
			</div><br/>
			<div>
				<b>VoIP</b>
				<p>Uma central de atendimento &eacute; composta por estruturas f&iacute;sicas que tem por objetivo centralizar o recebimento de liga&ccedil;&otilde;es telef&ocirc;nicas.</p>
				<a class="btn btn-default" href="solucoes.php" role="button">Ver mais</a>
			</div>
		</div>
		<div class='row' style='margin-bottom: 60px;'></div>
	</div>

<?php
	require_once('includes/rodape.php');
	require_once('includes/fim.php');
?>