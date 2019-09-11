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
    <link href="css/estilo.css" type="text/css" rel="stylesheet"/>
    <?php include_once 'includes/cabecalho.php'?>
<div>
<fieldset>
      <legend> editar alunos  </legend>
        <form action="editar_alunos.php>atualizar=true"></label>
        <label>Nome:<input type="text" name="nome" required/> </label>
        <label>Cidade:<input type="text" name="cidade" required/> </label>
        <label>CEP:<input type="text" name="cep" required/> </label>
        <label>Bairro:<input type="text" name="bairro" required/> </label>
        <label>Rua:<input type="rua" required/> </label>
        <label>Estado:<input type="estado" required/> </label>
        <label>Data Nasc:<input type="text" name="data_nascimento" required/> </label>
        <button type="submit">Salvar</button>
         </form>
</legend>
</div>