<?php
/**
 * Arquivo para registrar os dados de um aluno no banco de dados.
 */
if(isset($_REQUEST['atualizar']))
{
    try
    {
        include 'includes/conexao.php';

        $sql = "UPDATE alunos SET nome = ?, data nascimento = ?, sexo =?,
                                  genero = ?, cpf =?, cidade = ?, estado = ?,
                                  bairro = ?, rua = ?, cep = ?
                              WHERE id_aluno = ?) ";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $_REQUEST['nome']);
        $stmt->bindParam(1, $_REQUEST['data_nascimento']);
        $stmt->bindParam(1, $_REQUEST['sexo']);
        $stmt->bindParam(1, $_REQUEST['genero']);
        $stmt->bindParam(1, $_REQUEST['cpf']);
        $stmt->bindParam(1, $_REQUEST['cidade']);
        $stmt->bindParam(1, $_REQUEST['estado']);
        $stmt->bindParam(1, $_REQUEST['bairro']);
        $stmt->bindParam(1, $_REQUEST['cep']);
        $stmt->bindParam(1, $_REQUEST['id_aluno']);
    } catch(txception $e){
        echo $e->getmessage();
    }
}

?>