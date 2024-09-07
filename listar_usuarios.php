<?php 
    include('usuario.php');
    $usuario = new Usuario($conexion);
    $usuarios = $usuario->listarUsuarios();
    $title = "Lista usuarios";
    include 'header.php';
?>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header text-center">
            <h1>Lista de Usuarios</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario['id']; ?></td>
                        <td><?php echo $usuario['nombre']; ?></td>
                        <td><?php echo $usuario['direccion']; ?></td>
                        <td><?php echo $usuario['telefono']; ?></td>
                        <td>
                            <a href="editar_usuario.php?id=<?php echo $usuario['id']; ?>" class="btn btn-sm btn-warning">Editar</a>
                            <!-- Modificación del botón de eliminar con confirmación -->
                            <a href="eliminar_usuario.php?id=<?php echo $usuario['id']; ?>" 
                               class="btn btn-sm btn-danger" 
                               onclick="return confirmacionEliminar()">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-center">
            <a href="agregar_usuario.php" class="btn btn-primary">Agregar Usuario</a>
        </div>
    </div>
</div>

<!-- Función de confirmación -->
<script>
    function confirmacionEliminar() {
        return confirm("¿Estás seguro de que deseas eliminar este usuario?");
    }
</script>

<?php include 'footer.php'; ?>
