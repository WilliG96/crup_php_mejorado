<?php
// Incluir los archivos necesarios
include('conexion.php');  // Asegúrate de tener una conexión correcta
include('usuario.php');

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos enviados por el formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    // Crear una instancia de la clase Usuario
    $usuario = new Usuario($conexion);

    // Llamar al método para actualizar el usuario
    if ($usuario->actualizarUsuario($id, $nombre, $direccion, $telefono)) {
        // Redirigir a la página de lista de usuarios si se actualiza correctamente
        header('Location: listar_usuarios.php');
        exit();
    } else {
        // Mostrar un mensaje de error si ocurre un problema
        echo "Error al actualizar el usuario.";
    }
} else {
    // Redirigir si no se envía por método POST
    header('Location: listar_usuarios.php');
    exit();
}
?>

