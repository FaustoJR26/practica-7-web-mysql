<?php
$host = "db";
$db = "practica";
$user = "usuario";
$password = "123456";

try {
    $conexion = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $password
    );

    echo "<h1>¡Hola Mundo!</h1>";
    echo "<h2>Aplicación PHP funcionando con Docker</h2>";
    echo "<p>¡Conexión a MySQL exitosa!</p>";

} catch (PDOException $e) {
    http_response_code(500);
    echo "Error de conexión: " . htmlspecialchars($e->getMessage());
}
?>
