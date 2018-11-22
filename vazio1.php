<?php

echo "<br><h3>.:: CADASTRO ::.</h3><br>";


$acao=$_GET["acao"];


if($acao == "inserir"){
    include 'aluno_recuperaForm.php';
    include 'banco/conecta.php';
    $insere = ("insert into tb_aluno (id_aluno, nome, data_nasc, email, celular, mandioca,  cep, sexo, mensagem) values (NULL, '$nome', '$data_nasc', '$email', '$celular', '$mandioca',  '$cep', '$sexo', '$mensagem');");
    mysqli_query($conn, $insere); // INSERE NO BANCO
    mysqli_commit($conn);  // EXECUTA A TRANSAÇÃO
    mysqli_close($conn);  // ENCERRA CONEXAO MySQL

    ?><br><span class='msg'>.:: Cadastro INSERIDO com Sucesso ! ::.</span><br><br><?php
    // REDIRECIONAMENTO AUTOMATICO EM 5 SEGUNDOS
    echo "<meta HTTP-EQUIV='refresh' CONTENT='3; URL=index.php?menu=insere'>";
}

?>


<tr class="form">
            <td>Selecione o tipo da mandioca : </td>
            <td><select style="border-radius: 10px; width:300px; height: 30px; margin-top: 10px;" name="mandioca_">
            <option value=mandioca>Mesa</option>
            <option value=mandioca>Fécula</option>
            <option value=mandioca>Farinha</option>
            
           
            </select></td>
        </tr>  







