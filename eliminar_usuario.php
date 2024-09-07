<?php
include('usuario.php');
include('conexion.php'); // Asegúrate de incluir tu conexión

// Verificar si se ha recibido el ID del usuario por GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Crear una instancia del modelo Usuario
    $usuario = new Usuario($conexion);

    // Llamar a la función eliminarUsuario del modelo
    if ($usuario->eliminarUsuario($id)) {
        // Si la eliminación es exitosa, redirigir a la lista de usuarios
        header("Location: listar_usuarios.php");
    } else {
        echo "Error al eliminar el usuario.";
    }
} else {
    echo "No se ha proporcionado un ID de usuario.";
}
?>
