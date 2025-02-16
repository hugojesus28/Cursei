<?php
require_once '../model/Instituicao.php';
require_once '../DAO/instituicaoDao.php';

$instituicao = new Instituicao();

$instituicao->setNomeInstituicao($_POST['nome']);
$instituicao->setCnpjInstituicao($_POST['cnpj']);
$instituicao->setTelefoneInstituicao($_POST['tel']);
$instituicao->setEmailInstituicao($_POST['email']);
$instituicao->setSenhaInstituicao($_POST['senha']);


echo '<pre>';
print_r($instituicao);
echo '</pre>';
$insert = InstituicaoDao::inserirInstituicao($instituicao);

?>