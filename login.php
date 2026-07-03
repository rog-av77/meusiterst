<?php
//Incluindo o arquivo o arquivo de conexão nesse arquivo
include "conecta.php";

// Recebendo os dados do formulário
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM aluno 
  WHERE cpf = :cpf AND senha = :senha";

try {
    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':senha', $senha);

    $stmt->execute();

    if ( $linha = $stmt->fetch() ) {
        //restante do código...


try {
    // Executando a consulta
    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':senha', $senha);

    $stmt->execute();

    if ( $linha = $stmt->fetch() ) {
        echo "Login bem-sucedido!";
    } else {
        echo "CPF ou senha incorretos.";
    }
} catch (PDOException $e) {
    echo "Erro ao executar consulta: " . $e->getMessage();
}
?>
