<?php

echo "<br><h3>.:: CADASTRO ::.</h3><br>";


$acao=$_GET["acao"];


if($acao == "inserir"){
    include 'aluno_recuperaForm.php';
    include 'banco/conecta.php';
    $insere = ("insert into tb_aluno (id_aluno, nome, data_nasc, email, celular, cidade,  cep, sexo, mandioca, planta, planta2, solo, raiz, mensagem) values (NULL, '$nome', '$data_nasc', '$email', '$celular', '$cidade',  '$cep', '$sexo', '$mandioca', '$planta', '$planta2', '$solo', '$raiz', '$mensagem');");
    mysqli_query($conn, $insere); // INSERE NO BANCO
    mysqli_commit($conn);  // EXECUTA A TRANSAÇÃO
    mysqli_close($conn);  // ENCERRA CONEXAO MySQL

    ?><br><span class='msg'>.:: Cadastro INSERIDO com Sucesso ! ::.</span><br><br><?php
    // REDIRECIONAMENTO AUTOMATICO EM 5 SEGUNDOS
    echo "<meta HTTP-EQUIV='refresh' CONTENT='3; URL=index.php?menu=insere'>";
}

?>


<form id="form1" method="POST" action="index.php?menu=insere&acao=inserir" enctype="multipart/form-data">
    
    

    <table width="350" border="0" cellspacing="5">
        <tr class="form">
            <td>Nome: </td>
            <td><input  style="border-radius: 10px; width:300px; height: 30px;"  id="inp" type="text" name="nome_" value=""/></td>
        </tr>
        <tr class="form">
            <td>Data Nascimento: </td>
            <td><input style="border-radius: 10px; width:300px; height: 30px; margin-top: 10px;" type="text" name="data_nasc_" value=""/></td>
        </tr>    
        <tr class="form">
            <td>E-mail: </td>
            <td><input style="border-radius: 10px; width:300px; height: 30px; margin-top: 10px;" type="text" name="email_" value=""/></td>
        </tr>    
         <tr class="form">
            <td>Celular: </td>
            <td><input style="border-radius: 10px; width:300px; height: 30px; margin-top: 10px;" type="text" name="celular_" value=""/></td>
        </tr>    
        <tr class="form">
            <td>Cidade: </td>
            <td><input style="border-radius: 10px; width:300px; height: 30px; margin-top: 10px;" type="text" name="cidade_" value=""/></td>
        </tr>     
        <tr class="form">
            <td>cep: </td>
            <td><input style="border-radius: 10px; width:300px; height: 30px; margin-top: 10px;" type="text" name="cep_" value=""/></td>
        </tr>    
       <tr class="form">
            <td>sexo: </td>
            <td><input type="radio" name="sexo_" value="M"/>Masculino
            <input type="radio" name="sexo_" value="F"/>Feminino</td>
        </tr> 
        
         <tr class="form">
            <td>Mandioca: </td>
            <td><input  style="border-radius: 10px; width:300px; height: 30px;"  id="inp" type="text" name="mandioca_" value=""/></td>
        </tr>
        <tr class="form">
            <td>Espaçamento de planta: </td>
            <td><input  style="border-radius: 10px; width:300px; height: 30px;"  id="inp" type="text" name="planta_" value=""/></td>
        </tr>
        <tr class="form">
            <td>Espaçamento entre planta: </td>
            <td><input  style="border-radius: 10px; width:300px; height: 30px;"  id="inp" type="text" name="planta2_" value=""/></td>
        </tr>
        <tr class="form">
            <td>Informe seu solo: </td>
            <td><input  style="border-radius: 10px; width:300px; height: 30px;"  id="inp" type="text" name="solo_" value=""/></td>
        </tr>
        <tr class="form">
            <td>Cor de poupa da raiz: </td>
            <td><input  style="border-radius: 10px; width:300px; height: 30px;"  id="inp" type="text" name="raiz_" value=""/></td>
        </tr>
        
        
     
       
        
    </table>
    
       <tr class="form">
           <td> <textarea style="border-radius: 10px; width:600px; height: 90px; margin-top: 10px;" name="mensagem_" rows="10" cols"30" placeholder="Mensagem"></textarea> </td>
          
        </tr>
    
         <tr class="form">
            <td colspan="2">
                <br>
                <input type="submit" name="insere" value="Salvar" /> 
                &nbsp;&nbsp;
                <input type="reset" name="limpa"  value="Limpar" />
            </td>
        </tr>   
       
   
    
</form>



