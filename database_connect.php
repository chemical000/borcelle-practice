<?php
$mail = $_POST['email'];
$phone_number = $_POST['telefone'];
$senha = $_POST['senha'];
$servername = "localhost";
$database = "borcelle_practice";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

 
$sql = "INSERT INTO `usuario`(`email`, `telefone`, `senha`) VALUES('$mail', '$phone_number', '$senha')";
if (mysqli_query($conn, $sql)) {
      echo("<script>alert('usuario cadastrado com sucesso!')</script>");
      echo("<script>window.location = 'login/login.html';</script>"); 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>