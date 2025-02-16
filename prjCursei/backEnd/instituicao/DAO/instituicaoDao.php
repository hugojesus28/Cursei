<?php 

require_once 'conexao.php';

class InstituicaoDao{

    public static function inserirInstituicao($instituicao){

        $conexao = Conexao::conectar();

        $querry = "INSERT INTO tbInstituicao (nomeInstituicao, cnpjInstituicao, telefoneInstituicao, emailInstituicao, senhaInstituicao)
        VALUES (?, ?, ?, ?, ?)";

        $stmt = $conexao->prepare($querry);

        $stmt->bindValue(1, $instituicao->getNomeInstituicao());
        $stmt->bindValue(2, $instituicao->getCnpjInstituicao());
        $stmt->bindValue(3, $instituicao->getTelefoneInstituicao());
        $stmt->bindValue(4, $instituicao->getEmailInstituicao());
        $stmt->bindValue(5, $instituicao->getSenhaInstituicao());

        $stmt->execute();



    }

}

?>