<?php
// CONFIGURAÇÕES DO BANCO
$host = "sqlXXX.epizy.com"; // Ex: sql311.epizy.com (confirme no painel InfinityFree)
$dbname = "ep_xyz_form_ecoacao"; // Seu banco de dados
$username = "ep_xyz"; // Seu usuário
$password = "sua_senha"; // Sua senha

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

  $stmt = $pdo->prepare("INSERT INTO formulario_ecoacao (
    nome, cpf, data_nasc, celular, fixo, email,
    menor1_nome, menor1_data, menor2_nome, menor2_data,
    restricoes_medicas, restricoes_locomocao, alergias,
    plano_saude, contato_emergencia_nome, contato_emergencia_parentesco, contato_emergencia_telefone
  ) VALUES (
    :nome, :cpf, :data_nasc, :celular, :fixo, :email,
    :menor1_nome, :menor1_data, :menor2_nome, :menor2_data,
    :restricoes_medicas, :restricoes_locomocao, :alergias,
    :plano_saude, :contato_emergencia_nome, :contato_emergencia_parentesco, :contato_emergencia_telefone
  )");

  $stmt->execute([
    ':nome' => $_POST['nome'],
    ':cpf' => $_POST['cpf'],
    ':data_nasc' => $_POST['data_nasc'],
    ':celular' => $_POST['celular'],
    ':fixo' => $_POST['fixo'],
    ':email' => $_POST['email'],
    ':menor1_nome' => $_POST['menor1_nome'],
    ':menor1_data' => $_POST['menor1_data'],
    ':menor2_nome' => $_POST['menor2_nome'],
    ':menor2_data' => $_POST['menor2_data'],
    ':restricoes_medicas' => $_POST['restricoes_medicas'],
    ':restricoes_locomocao' => $_POST['restricoes_locomocao'],
    ':alergias' => $_POST['alergias'],
    ':plano_saude' => $_POST['plano_saude'],
    ':contato_emergencia_nome'
