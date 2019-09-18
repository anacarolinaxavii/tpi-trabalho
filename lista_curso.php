<?php
try
{ 
    include 'includes/conexao.php';

    $stmt = $conexao->prepare("SELECT * FROM aluno ORDER BY nome ASC");
    $stmt->execute();

} catch(exception $e){
    echo $e->getMessge();
}
?>
<link href="css/estilo.css" type="text/css" rel="stylesheet"/>
<?php include_once 'includes/cabecalho.php'?>

<table>
    <thead>
    <tr>    
    <th>ID</th>
    <th>NOME</th>
</tr>
</thead>
<tbody>
    <?php while($cursos = $stml->fetchobject()):?>
</tr>
<?php endwhile ?>
</tbody>
</table>