
<?php

    if($_SERVER['REQUEST_METHOD']== 'POST'){
    include_once('conexao.php');
    
    $titulo           = $_POST['titulo'];
    $descricao        = $_POST['descricao'];
    $ano_lancamento   = $_POST['ano_lancamento'];
    $genero           = $_POST['genero'];
    $classificacao    = $_POST['classificacao'];
    $data_cadastro    = $_POST['data_cadastro'];
    $data_atualizacao = $_POST['data_atualizacao'];
    $status             = 0; 

    $sql = "INSERT INTO filmes (titulo, descricao, ano_lancamento, genero, classificacao, data_cadastro, data_atualizacao, status) 
    VALUES ('$titulo', '$descricao', '$ano_lancamento', '$genero', '$classificacao', '$data_cadastro', '$data_atualizacao', '$status')"; 
    
    if($conn->query($sql)==TRUE){
        echo "<h1>Cadastro realizado com sucesso!</h1>";
        echo "<h1>Volte à guia 'Listar' e tecle F5 para atualizar!</h1>";
        
    }else{
        echo "Erro ao inserir registro". $conn->error;
    }}
?>