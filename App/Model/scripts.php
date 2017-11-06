<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prjrestaurante";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
    die("Falha na conexão".$conn->connect_error);
else
    print "conexão com sucesso.";

// Inserir dados
$sql = "INSERT INTO agenda VALUES(null,?,?,?)";

$enviar = $conn->prepare($sql);
$enviar->bind_param("sss", $nome, $end, $tel);

$nome = "Samuel";
$end = "Av. Getulho";
$tel = '(18) 7777-8494';

// Consultar dados
$sql = "SELECT FROM agenda";
$consultar = $conn->query($sql);

if($consultar->num_rows > 0){
    while($row = $consulta->fetch_assoc()){
        print_r($row);
    }
}
$sql->close();
$conn->close();