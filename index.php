<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "prjrestaurante";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
    die("Conexão falhou".$conn->connect_error);
else
    print "Dados enviados com sucesso.";

// Inserir dados na table
/* $sql = "INSERT INTO agenda VALUES(null,?,?,?)";

$enviar = $conn->prepare($sql);
$enviar->bind_param("sss", $nome, $end, $tel);

$nome = "Dantas Romeu";
$end = "R. Pedro";
$tel = "(20) 8888-9999";

$enviar->execute(); */

// Consultar dados na table
$sql = "SELECT id, nome, end, tel  FROM agenda";
$resultado = $conn->query($sql);

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        print "<br />ID: ".$row["id"]."\nNome: ".$row["nome"]."\nEndereço: ".$row["end"]."\nTel: ".$row["tel"]; 
    }

    print "<br />Total de clientes na agenda: ".$resultado->num_rows;
}
else{
    print "Nenhum dado encontrado 0";
}

// Alterar dados
$nome = "André";
$end = "R. Pedro Gi";
$tel = "(19) 98899-8454";
$sql = "UPDATE agenda SET nome='$nome', end='$end', tel='$tel' WHERE id=2";

if($conn->query($sql))
    print "<br />Agenda alterada com sucesso";
else
    print "<br />Erro ao alterar".$conn->error;

// Deletar dados da table
/* $sql = "DELETE FROM agenda WHERE id=1";


if($conn->query($sql))
    print "dados deletados com sucesso.";
else
    print "Erro ao deletar: ".$conn->error; */


/* $enviar->close(); */
$conn->close();
?>

