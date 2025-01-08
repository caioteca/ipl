<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Captura os dados do formulário
    $nome = htmlspecialchars($_POST['mf-first-name']);
    $assunto = htmlspecialchars($_POST['mf-text']);
    $email = htmlspecialchars($_POST['mf-email']);
    $telefone = htmlspecialchars($_POST['mf-telephone']);
    $mensagem = htmlspecialchars($_POST['mf-textarea']);

    // Validação básica
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos obrigatórios.";
        exit;
    }

    // Configurações do e-mail
    $to = "caioteca2020@gmail.com"; // Substitua pelo e-mail de destino
    $subject = "Nova mensagem do formulário: $assunto";
    $body = "
        Nome: $nome\n
        Email: $email\n
        Telefone: $telefone\n
        Mensagem:\n$mensagem
    ";
    $headers = "From: $email";

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso.";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
