<?php

echo "<br><h3>.:: ALTERA ::.</h3>";

$acao=$_GET["acao"];

if($acao == "alterar"){
    include 'aluno_recuperaForm.php';
    include 'banco/conecta.php';
    $id=$_GET["id"];
    
    
    $altera = ("update tb_aluno set nome='$nome', data_nasc='$data_nasc', email='$email', celular='$celular', salario='$salario', escolaridade='$escolaridade',turno='$turno', disciplina='$disciplina', cpf='$cpf', cep='$cep', sexo='$sexo' where id_aluno='$id';");
    mysqli_query($conn, $altera); // INSERE NO BANCO
    mysqli_commit($conn);  // EXECUTA A TRANSAÇÃO
    mysqli_close($conn);  // ENCERRA CONEXAO MySQL
    
    ?><br><span class='msg'>Cadastro ALTERADO com Sucesso!</span><?php
    // REDIRECIONAMENTO AUTOMATICO EM 5 SEGUNDOS
    echo "<meta HTTP-EQUIV='refresh' CONTENT='3; URL=index.php?menu=altera'>";
}

?>


<?php
    if($acao=="seleciona"){

    include 'aluno_recuperaDB.php';
    
?>

<form id="form1" method="POST" action="index.php?menu=altera&acao=alterar&id=<?=$id?>" enctype="multipart/form-data">

    <table width="350" border="0" cellspacing="5">
        <tr>
            <td>Cód: </td>
            <td><input type="text" name="id_aluno_" value="<?= $id_aluno ?>" readonly /></td>
        </tr>
        <tr>
            <td>Nome: </td>
            <td><input type="text" name="nome_" value="<?= $nome ?>"/></td>
        </tr>
        <tr>
            <td>Data Nascimento: </td>
            <td><input type="text" name="data_nasc_" value="<?= $data_nasc ?>"/></td>
        </tr>    
        <tr>
            <td>E-mail: </td>
            <td><input type="text" name="email_" value="<?= $email ?>"/></td>
        </tr>    
        <tr>
            <td>Celular: </td>
            <td><input type="text" name="celular_" value="<?= $celular ?>"/></td>
        </tr>    
        <tr>
            <td>Salário: </td>
            <td><input type="text" name="salario_" value="<?= $salario ?>"/></td>
        </tr>    <tr>
            <td>Escolaridade: </td>
            <td><input type="text" name="escolaridade_" value="<?= $escolaridade ?>"/></td>
        </tr>      <tr>
            <td>Turnor: </td>
            <td><input type="text" name="turno_" value="<?= $turno ?>"/></td>
        </tr>      <tr>
            <td>Disciplina: </td>
            <td><input type="text" name="disciplina_" value="<?= $disciplina ?>"/></td>
        </tr>      <tr>
            <td>Cpf: </td>
            <td><input type="text" name="cpf_" value="<?= $cpf ?>"/></td>
        </tr>      <tr>
            <td>Cep: </td>
            <td><input type="text" name="cep_" value="<?= $cep ?>"/> </td>
        </tr>      <tr>
            <td>Sexo: </td>
            <td><input type="text" name="sexo_" value="<?= $sexo ?>"/></td>
        </tr>     
       
        
        <tr>
            <td colspan="2">
                <br>
                <input type="submit" name="altera" value="Alterar" /> 
                &nbsp;&nbsp;
                <input type="submit" name="limpa"  value="Limpar" />
            </td>
        </tr>        
        
    </table>
    
</form>

<?php
    }
?>




<?php
//#----------------------------------------------------------
//### CONSULTA NOME - SALARIO

echo "<br><br><br><h3>.:: LISTA DE ALUNOS ::.</h3>";

// CHAMA CONEXAO COM BANCO MySQL  
include 'banco/conecta.php';

// GERA UMA STRING DA CONSULTA
$sql = "SELECT id_aluno, nome, salario FROM tb_aluno ORDER BY nome asc";

// EXECUTA CONSULTA
$res = mysqli_query($conn, $sql);

// TOTAL DE REGISTROS
$total = mysqli_num_rows($res);
echo "<br>Total de Resultados: " . $total;


// LISTA OS REGISTROS
echo  "<br><br><b>| NOME | SALÁRIO | </b><br>";
while ($c = mysqli_fetch_array($res)){
    echo 	
        '<a href="index.php?menu=altera&acao=seleciona&id='. $c['id_aluno'] .'">' . $c['nome'] . '</a>' . " | " .
	$c['salario'] . " | <br>" 
    ;
}

// FECHA CONEXÃO
mysqli_close($conn);
?>