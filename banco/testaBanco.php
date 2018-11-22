<?
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF8">
        <title></title>
    </head>
    <body>



<?    
// ============ CONSULTA ===============
	
	// ABRE CONEXAO COM BANCO
	include("conecta.php");
	//REALIZA UM SELECT NA TABELA
        $pessoas=mysql_query("select * from teste order by nome asc");
        //DESCOBRE A QTD DE LINHAS DE DADOS
	$ndados=mysql_num_rows($pessoas);
  	echo "<br><br>Há <b>$ndados</b> Visitantes"; 
    echo"<br><br>";
?>
<table border="0" class="tabela">
<thead stile="font-weight:bold; text-align: center;">
<tr>
    <td class="titulo_meio" align="center">| Cod </td> 
    <td class="titulo_meio" align="center">| Nome </td>
    <td class="titulo_meio" align="center">| Valor |</td>
</tr>
</thead>
<tbody align="left">
<?php
    for ($i=0;$i<$ndados;$i++){
    // VARIACAO DA COR DO FUNDO DA LINHA DA TABELA
    if($i%2 == 0){ 
       $fundo='conteudo_branco';
       $fundo_c='conteudo_branco_c';
    } else {
       $fundo='conteudo_cinza';
       $fundo_c='conteudo_cinza_c';
    }
    
    //DESCOBRIR O TAMANHO DO ARRAY
    $dados=mysql_fetch_array($pessoas);
    //POVOAR A TABELA COMO DADOS VINDOS DO BANCO
    $id_teste=$dados["id_teste"];
    $nome=$dados["nome"];
    $valor=$dados["valor"];
echo "
	<tr>
        <td class='$fundo'>$id_teste &nbsp;</td>
		<td class='$fundo'><a href='index.php?menu=cadastro/visitante&id=$id_teste&acao=mostra'>$nome &nbsp;</a></td>
        <td class='$fundo'>$valor &nbsp;</td>
	</tr>
	";
	}
?>
</tbody>
</table>    
 
    </body>
</html>
