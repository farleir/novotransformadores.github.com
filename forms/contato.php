<?php
session_start();
$cod=$_POST[cod];
$nome=$_POST[nome];
$email=$_POST[email];
$telefone=$_POST[telefone];
$assunto=$_POST[assunto];
$mensagem=$_POST[mensagem];

if($_SESSION['cv']==$cod){
        
        mail("contato@novotransformadores.com.br","$assunto","
        
        Nome: $nome
        
        Email: $email
        
        Telefone: $telefone
        
        Assunto: $assunto
        
        Mensagem: $mensagem","FROM:$nome<$email>");
        
        echo "A mensagem abaixo foi enviada com sucesso!";
        print '<pre>'; print_r($_POST); print '</pre>';
        session_destroy();

}else{
    
    echo '<h2><b>Erro!</b> Digite o codigo corretamente!<br></h2><br><a href="javascript:history.back(1)">Voltar</a>';
    session_destroy();
}

?>