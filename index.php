<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>luiz</title>
    <link rel="stylesheet" type="text/css" href="css/estilo1.css"> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
        <script src="biblioteca/jquery-331.js" type="text/javascript"></script>
        <script src="biblioteca/jquery.maskedinput.js" type="text/javascript"></script>
        <script src="biblioteca/jquery-migrate-141.js" type="text/javascript"></script>
        <!--
        MASCARA FORMULARIO INPUT
        id="celular" value="" placeholder="(99) 99999-9999"
        Para construir as máscaras este plugin utiliza as seguintes regras:
        a – Representa um caractere alfabético (AZ, az)
        9 – Representa um carácter numérico (0-9)
        * – Representa um caractere alfanumérico (AZ, az ,0-9)
        -->
        <script type="text/javascript">
            $(function(){
                $.mask.definitions['~'] = "[+-]";
                $("#data").mask("99/99/9999");
                $("#celular").mask("(99) 99999-9999");
                $("#fone").mask("(99) 99999-9999");
                $("#indicativoTelefone").mask("+55 (99) 9999 999");
                $("#rg").mask("99.999.999-aa");
                $("#cpf").mask("999.999.999-99");
            });
        </script>
</head>
<body>

    <div id="geral">
        
	<div id="cabecalho">
		<?php include('cabecalho.php'); ?>
	</div>
	

	<div id="menu">
		<?php include('menu.php'); ?>
	</div>
	
        
        <div id="rodape-cima"></div>
        
        
	<div id="corpo">
		<?php include('corpo.php'); ?>	
	</div>
	
        
        <div id="rodape-cima"></div>
        
        
        <div id="rodape">
		<?php include('rodape.php'); ?>
	</div>

    </div>      
      
  </body>
</html>